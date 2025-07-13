<?php

namespace app\Ship\Providers;

use App\Ship\Parents\ParentServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ParentServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $paths = glob(
            app_path('Modules/*/Routes/*.php')
        );

        collect($paths)->each(function (string $path): void {
            Route::group([], $path);
        });
    }
}
