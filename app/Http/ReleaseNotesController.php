<?php

declare(strict_types=1);

namespace App\Http;

use Illuminate\View\View;
use League\CommonMark\CommonMarkConverter;

final class ReleaseNotesController
{
    public function __invoke(): View
    {
        $path = public_path('builds/early-access/sponsors/changelog.md');

        if (! file_exists($path)) {
            abort(404);
        }

        $content = (new CommonMarkConverter)
            ->convert(file_get_contents($path));

        return view('changelog', [
            'content' => $content,
        ]);
    }
}
