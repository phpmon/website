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
    }

    public function test_homepage_displays_cached_github_stats_when_available(): void
    {
        Cache::put('stargazers', 12800);
        Cache::put('downloads', 255000);

        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('GitHub Stats');
        $response->assertSee('12.8k');
        $response->assertSee('255k');
    }
}
