<?php

use Illuminate\Support\Facades\Route;
use App\Http\Redirection;

Route::get('/', fn () => view('homepage'));

collect([
    Redirection::named('github', '/github', 'https://github.com/nicoverbruggen/phpmon'),
    Redirection::named('releases', '/releases', 'https://github.com/nicoverbruggen/phpmon/releases'),
    Redirection::named('faq', '/faq', 'https://github.com/nicoverbruggen/phpmon#%EF%B8%8F-faq--troubleshooting'),
    Redirection::named('sponsor', '/sponsor', 'https://nicoverbruggen.be/sponsor'),
    Redirection::named('sponsor.now', '/sponsor/now', 'https://nicoverbruggen.be/sponsor#pay-now'),
    Redirection::named('wiki.pre-release', '/prerelease-php', 'https://github.com/nicoverbruggen/phpmon/wiki/Supporting-pre-release-versions-of-PHP')
])->each(function (Redirection $r) {
    Route::get($r->url, fn () => redirect()->to($r->target))->name($r->name);
});