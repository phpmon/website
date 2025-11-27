<?php

declare(strict_types=1);

namespace App\Http;

use Illuminate\View\View;
use League\CommonMark\CommonMarkConverter;

final class PrivacyPolicyController
{
    public function __invoke(): View
    {
        $markdown = file_get_contents(resource_path('markdown/privacy_policy.md'));
        $content = (new CommonMarkConverter)->convert($markdown);

        $timestamp = filemtime(resource_path('markdown/privacy_policy.md'));
        $modified = date('Y-m-d', $timestamp);

        return view('privacy-policy', [
            'content' => $content,
            'lastUpdated' => $modified,
        ]);
    }
}
