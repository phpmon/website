<?php

declare(strict_types=1);

use App\Http\Redirection;
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
Route::get('/sitemap.xml', fn () => response()
    ->view('sitemap', [
        'urls' => [
            ['loc' => url('/'), 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => route('setup.apple-devtools'), 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => route('setup.homebrew'), 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => route('release-notes'), 'changefreq' => 'weekly', 'priority' => '0.5'],
            ['loc' => route('privacy-policy'), 'changefreq' => 'yearly', 'priority' => '0.3'],
        ],
    ], 200)
    ->header('Content-Type', 'application/xml'))
    ->name('sitemap');

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
