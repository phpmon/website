<?php

declare(strict_types=1);

namespace App\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

final class RetrieveLatestGitHubRelease extends Command
{
    protected $signature = 'github:fetch-latest-release';

    protected $description = 'Fetches the latest stable PHP Monitor release metadata';

    public function handle(): int
    {
        $response = Http::get('https://api.github.com/repos/nicoverbruggen/phpmon/releases/latest');

        if ($response->failed()) {
            Log::error($response->body());

            return 1;
        }

        $release = json_decode($response->body(), null, 512, JSON_THROW_ON_ERROR);

        Cache::put('latest_release_version', ltrim($release->tag_name, 'v'));
        Cache::put('latest_release_published_at', $release->published_at);

        $this->info("Latest stable PHP Monitor release is {$release->tag_name}, published on {$release->published_at}.");

        return 0;
    }
}
