<?php

declare(strict_types=1);

use App\Http\Redirection;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('homepage'));

Route::get('/privacy-policy', \App\Http\PrivacyPolicyController::class)
    ->name('privacy-policy');
Route::get('/early-access/release-notes', \App\Http\ReleaseNotesController::class)
    ->name('release-notes');

collect([
    Redirection::named('github', '/github', 'https://github.com/nicoverbruggen/phpmon'),
    Redirection::named('releases', '/releases', 'https://github.com/nicoverbruggen/phpmon/releases'),
    Redirection::named('faq', '/faq', 'https://github.com/nicoverbruggen/phpmon#%EF%B8%8F-faq--troubleshooting'),
    Redirection::named('sponsor', '/sponsor', 'https://nicoverbruggen.be/sponsor'),
    Redirection::named('sponsor.now', '/sponsor/now', 'https://nicoverbruggen.be/sponsor#pay-now'),
    Redirection::named('wiki.pre-release', '/prerelease-php', 'https://github.com/nicoverbruggen/phpmon/wiki/Supporting-pre-release-versions-of-PHP'),
    Redirection::named('wiki.php-unavailable', '/php-unavailable', 'https://github.com/nicoverbruggen/phpmon/wiki/Installing-or-upgrading-to-the-latest-version-of-PHP#why-is-a-php-version-marked-as-unavailable'),
    Redirection::named('wiki.php-upgrade', '/php-upgrade', 'https://github.com/nicoverbruggen/phpmon/wiki/Installing-or-upgrading-to-the-latest-version-of-PHP'),
])->each(function (Redirection $r) {
    Route::get($r->url, fn () => redirect()->to($r->target))->name($r->name);
});
