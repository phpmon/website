<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

final class RouteServiceProvider extends ServiceProvider
{
    #[\Override]
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')->group(app_path('routes.php'));
        });
    }
}
