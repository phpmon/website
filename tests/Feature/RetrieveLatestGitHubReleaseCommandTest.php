<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class RetrieveLatestGitHubReleaseCommandTest extends TestCase
{
    public function test_github_fetch_latest_release_command_caches_latest_stable_release_metadata(): void
    {
        Http::fake([
            'https://api.github.com/repos/nicoverbruggen/phpmon/releases/latest' => Http::response([
                'tag_name' => 'v26.03',
                'published_at' => '2026-04-17T08:30:00Z',
            ]),
        ]);

        $this->artisan('github:fetch-latest-release')
            ->expectsOutput('Latest stable PHP Monitor release is v26.03, published on 2026-04-17T08:30:00Z.')
            ->assertSuccessful();

        Http::assertSentCount(1);

        $this->assertSame('26.03', Cache::get('latest_release_version'));
        $this->assertSame('2026-04-17T08:30:00Z', Cache::get('latest_release_published_at'));
    }
}
