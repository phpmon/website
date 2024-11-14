<?php

declare(strict_types=1);

use App\Http\Redirection;
use Illuminate\Support\Facades\Route;
use League\CommonMark\CommonMarkConverter;

Route::get('/', fn () => view('homepage'));

Route::get('/early-access/release-notes', function () {
    $path = public_path('builds/early-access/sponsors/changelog.md');
    if (file_exists($path)) {
        return view('changelog', [
            'content' => (new CommonMarkConverter)
                ->convert(file_get_contents($path)),
        ]);
    } else {
        abort(404);
    }
});

collect([
    Redirection::named('github', '/github', 'https://github.com/nicoverbruggen/phpmon'),
    Redirection::named('releases', '/releases', 'https://github.com/nicoverbruggen/phpmon/releases'),
    Redirection::named('faq', '/faq', 'https://github.com/nicoverbruggen/phpmon#%EF%B8%8F-faq--troubleshooting'),
    Redirection::named('sponsor', '/sponsor', 'https://nicoverbruggen.be/sponsor'),
    Redirection::named('sponsor.now', '/sponsor/now', 'https://nicoverbruggen.be/sponsor#pay-now'),
    Redirection::named('wiki.pre-release', '/prerelease-php', 'https://github.com/nicoverbruggen/phpmon/wiki/Supporting-pre-release-versions-of-PHP'),
])->each(function (Redirection $r) {
    Route::get($r->url, fn () => redirect()->to($r->target))->name($r->name);
});
