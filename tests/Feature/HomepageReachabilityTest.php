<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class HomepageReachabilityTest extends TestCase
{
    public function test_homepage_is_reachable(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_homepage_includes_project_specific_links_and_content(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Support PHP Monitor with a monthly sponsorship');
        $response->assertSee('/early-access/release-notes');
        $response->assertSee('/privacy-policy');
        $response->assertSee('/github');
        $response->assertSee('/sponsor');
        $response->assertDontSee('is now available!');
    }

    public function test_homepage_displays_cached_github_stats_when_available(): void
    {
        Cache::put('stargazers', 3000);
        Cache::put('downloads', 100000);

        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('GitHub Stats');
        $response->assertSee('3k');
        $response->assertSee('100k');
    }

    public function test_homepage_displays_cached_latest_release_information_when_available(): void
    {
        Cache::put('latest_release_version', '26.03');
        Cache::put('latest_release_published_at', '2026-04-17T08:30:00Z');

        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('PHP Monitor 26.03 is now available!');
        $response->assertSee('PHP Monitor was last updated on 17/04/2026.');
    }
}
