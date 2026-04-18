<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class RetrieveGitHubStatsCommandTest extends TestCase
{
    public function test_github_fetch_statistics_command_caches_stargazer_and_download_totals(): void
    {
        Http::fake([
            'https://api.github.com/repos/nicoverbruggen/phpmon' => Http::response([
                'stargazers_count' => 3000,
            ]),
            'https://api.github.com/repos/nicoverbruggen/phpmon/releases?per_page=100' => Http::response([
                [
                    'prerelease' => false,
                    'assets' => [
                        ['download_count' => 100],
                        ['download_count' => 250],
                    ],
                ],
                [
                    'prerelease' => true,
                    'assets' => [
                        ['download_count' => 9999],
                    ],
                ],
                [
                    'prerelease' => false,
                    'assets' => [
                        ['download_count' => 400],
                    ],
                ],
            ]),
        ]);

        $this->artisan('github:fetch-statistics')
            ->expectsOutput('PHP Monitor currently has 3000 stargazers and 750 total downloads.')
            ->assertSuccessful();

        Http::assertSentCount(2);

        $this->assertSame(3000, Cache::get('stargazers'));
        $this->assertSame(750, Cache::get('downloads'));
    }
}
