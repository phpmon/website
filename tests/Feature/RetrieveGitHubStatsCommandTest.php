<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class RetrieveGitHubStatsCommandTest extends TestCase
{
    public function test_github_fetch_command_caches_stargazer_and_download_totals(): void
    {
        Http::fake([
            'https://api.github.com/repos/nicoverbruggen/phpmon' => Http::response([
                'stargazers_count' => 4321,
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

        $this->artisan('github:fetch')
            ->expectsOutput('PHP Monitor currently has 4321 stargazers and 750 total downloads.')
            ->assertSuccessful();

        Http::assertSentCount(2);

        $this->assertSame(4321, Cache::get('stargazers'));
        $this->assertSame(750, Cache::get('downloads'));
    }
}
