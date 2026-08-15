<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class SeoReachabilityTest extends TestCase
{
    public function test_homepage_includes_seo_metadata_and_structured_data(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('<link rel="canonical" href="http://localhost">', false);
        $response->assertSee('<meta property="og:type" content="website">', false);
        $response->assertSee('<meta name="twitter:card" content="summary_large_image">', false);
        $response->assertSee('"@type":"SoftwareApplication"', false);
        $response->assertSee('"@type":"FAQPage"', false);
        $response->assertSee('<meta property="og:image:width" content="1280">', false);
        $response->assertSee('<meta property="og:image:height" content="640">', false);
        $response->assertSee('<meta property="og:image:alt" content="', false);
    }

    public function test_homepage_faq_markup_and_structured_data_stay_in_sync(): void
    {
        $response = $this->get('/');

        $questions = \App\Content\Faq::questions();

        foreach ($questions as $faq) {
            $response->assertSee($faq->question, false);
            $response->assertSee($faq->answer->toHtml(), false);
        }

        $this->assertCount($questions->count(), \App\Content\Faq::schema()['mainEntity']);
    }

    public function test_homepage_screenshots_are_indexable_images_with_alt_text(): void
    {
        $response = $this->get('/');

        $response->assertSee('<img src="/images/setup-assistant.jpg?v=2026.05"', false);
        $response->assertSee('Setup Assistant guiding the user through preparing a Mac', false);

        // Props must not leak onto the wrapper as bogus HTML attributes.
        $response->assertDontSee('img-src=', false);
        $response->assertDontSee('feature-title=', false);
    }

    public function test_setup_pages_include_article_metadata_and_how_to_schema(): void
    {
        $this->get('/install-homebrew')
            ->assertOk()
            ->assertSee('<link rel="canonical" href="http://localhost/install-homebrew">', false)
            ->assertSee('<meta property="og:type" content="article">', false)
            ->assertSee('"@type":"HowTo"', false)
            ->assertSee('install-homebrew-command');

        $this->get('/install-apple-devtools')
            ->assertOk()
            ->assertSee('<link rel="canonical" href="http://localhost/install-apple-devtools">', false)
            ->assertSee('<meta property="og:type" content="article">', false)
            ->assertSee('"@type":"HowTo"', false)
            ->assertSee('install-apple-devtools-command');
    }

    public function test_sitemap_lists_indexable_site_pages(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertOk();
        $response->assertHeader('Content-Type', 'application/xml');
        $response->assertSee('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">', false);
        $response->assertSee('<loc>http://localhost</loc>', false);
        $response->assertSee('<loc>http://localhost/install-homebrew</loc>', false);
        $response->assertSee('<loc>http://localhost/install-apple-devtools</loc>', false);
        $response->assertSee('<loc>http://localhost/privacy-policy</loc>', false);
        $response->assertDontSee('<loc>http://localhost/github</loc>', false);
        $response->assertDontSee('<loc>http://localhost/faq</loc>', false);

        // Google ignores these two outright; lastmod is the field it reads.
        $response->assertDontSee('<changefreq>', false);
        $response->assertDontSee('<priority>', false);
    }

    public function test_sitemap_only_dates_the_homepage_using_the_latest_release(): void
    {
        \Illuminate\Support\Facades\Cache::put('latest_release_published_at', '2026-08-02T09:14:00Z');

        $response = $this->get('/sitemap.xml');

        // The homepage has a real content date to report.
        $response->assertSee('<lastmod>2026-08-02T09:14:00+00:00</lastmod>', false);

        // Every other page has none, so it must not claim one.
        $this->assertSame(1, substr_count($response->getContent(), '<lastmod>'));
    }

    public function test_sitemap_omits_the_homepage_lastmod_when_no_release_is_known(): void
    {
        \Illuminate\Support\Facades\Cache::forget('latest_release_published_at');

        $this->get('/sitemap.xml')
            ->assertOk()
            ->assertDontSee('<lastmod>', false);
    }

    public function test_robots_txt_points_to_the_sitemap(): void
    {
        $robots = file_get_contents(public_path('robots.txt'));

        $this->assertStringContainsString('User-agent: *', $robots);
        $this->assertStringContainsString('Allow: /', $robots);
        $this->assertStringContainsString('Sitemap: https://phpmon.app/sitemap.xml', $robots);
    }
}
