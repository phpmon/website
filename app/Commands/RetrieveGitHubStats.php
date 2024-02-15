<?php

declare(strict_types=1);

namespace App\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

final class RetrieveGitHubStats extends Command
{
    protected $signature = 'github:fetch';

    protected $description = 'Fetches GitHub repository data (and stars + downloads)';

    public function handle()
    {
        $repositoryResponse = Http::get('https://api.github.com/repos/nicoverbruggen/phpmon');
        $releasesResponse = Http::get('https://api.github.com/repos/nicoverbruggen/phpmon/releases');

        if ($repositoryResponse->failed()) {
            Log::error($repositoryResponse->body());

            return 1;
        }

        if ($releasesResponse->failed()) {
            Log::error($releasesResponse->body());

            return 1;
        }

        $data = json_decode($repositoryResponse->body(), null, 512, JSON_THROW_ON_ERROR);
        $releases = json_decode($releasesResponse->body(), null, 512, JSON_THROW_ON_ERROR);

        Cache::put('stargazers', $data->stargazers_count);
        Cache::put('downloads', $total = collect($releases)
            ->where('prerelease', false)
            ->sum(fn ($release) => collect($release->assets)
                ->sum('download_count')));

        $this->info("PHP Monitor currently has {$data->stargazers_count} stargazers and {$total} total downloads.");

        return 0;
    }
}
