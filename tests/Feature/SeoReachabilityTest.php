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
        $response->assertDontSee('"@type":"FAQPage"', false);
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
    }

    public function test_robots_txt_points_to_the_sitemap(): void
    {
        $robots = file_get_contents(public_path('robots.txt'));

        $this->assertStringContainsString('User-agent: *', $robots);
        $this->assertStringContainsString('Allow: /', $robots);
        $this->assertStringContainsString('Sitemap: https://phpmon.app/sitemap.xml', $robots);
    }
}
