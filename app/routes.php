<?php

declare(strict_types=1);

use App\Http\Redirection;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('homepage'));

Route::get('/privacy-policy', \App\Http\PrivacyPolicyController::class)
    ->name('privacy-policy');
Route::get('/install-apple-devtools', fn () => view('setup.apple-devtools'))
    ->name('setup.apple-devtools');
Route::get('/install-homebrew', fn () => view('setup.homebrew'))
    ->name('setup.homebrew');
Route::get('/early-access/release-notes', \App\Http\ReleaseNotesController::class)
    ->name('release-notes');
Route::get('/sitemap.xml', function () {
    // Only the homepage carries a lastmod, taken from the latest GitHub release.
    // The other pages have no date we actually know, and Google would rather
    // see none than a wrong one.
    $latestRelease = Cache::get('latest_release_published_at');

    $urls = [
        ['loc' => url('/'), 'lastmod' => $latestRelease ? Carbon::parse($latestRelease)->toAtomString() : null],
        ['loc' => route('setup.apple-devtools')],
        ['loc' => route('setup.homebrew')],
        ['loc' => route('privacy-policy')],
    ];

    // The release notes 404 when the sponsors' changelog has not been deployed,
    // so only advertise the URL when it will actually resolve.
    if (is_file(public_path('builds/early-access/sponsors/changelog.md'))) {
        $urls[] = ['loc' => route('release-notes')];
    }

    return response()
        ->view('sitemap', ['urls' => $urls], 200)
        ->header('Content-Type', 'application/xml');
})->name('sitemap');

collect([
    Redirection::named('github', '/github', 'https://github.com/nicoverbruggen/phpmon'),
    Redirection::named('releases', '/releases', 'https://github.com/nicoverbruggen/phpmon/releases'),
    Redirection::named('faq', '/faq', 'https://github.com/nicoverbruggen/phpmon?tab=readme-ov-file#%E2%80%8D%EF%B8%8F-faq--troubleshooting'),
    Redirection::named('sponsor', '/sponsor', 'https://nicoverbruggen.be/sponsor'),
    Redirection::named('sponsor.now', '/sponsor/now', 'https://nicoverbruggen.be/sponsor#pay-now'),
    Redirection::named('wiki.pre-release', '/prerelease-php', 'https://github.com/nicoverbruggen/phpmon/wiki/Supporting-pre-release-versions-of-PHP'),
    Redirection::named('wiki.php-unavailable', '/php-unavailable', 'https://github.com/nicoverbruggen/phpmon/wiki/Installing-or-upgrading-to-the-latest-version-of-PHP#why-is-a-php-version-marked-as-unavailable'),
    Redirection::named('wiki.php-upgrade', '/php-upgrade', 'https://github.com/nicoverbruggen/phpmon/wiki/Installing-or-upgrading-to-the-latest-version-of-PHP'),
])->each(function (Redirection $r) {
    Route::get($r->url, fn () => redirect()->to($r->target))->name($r->name);
});
