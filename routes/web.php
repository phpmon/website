<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('homepage'));

Route::get('/github', fn () => redirect()->to('https://github.com/nicoverbruggen/phpmon'));
Route::get('/sponsor', fn () => redirect()->to('https://nicoverbruggen.be/sponsor'));
Route::get('/donate', fn () => redirect()->to('https://nicoverbruggen.be/sponsor'));
