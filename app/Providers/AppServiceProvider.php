<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        $paths = [
            database_path('migrations'),
            database_path('migrations') . DIRECTORY_SEPARATOR . 'module',
            database_path('migrations') . DIRECTORY_SEPARATOR . 'LSNI',
        ];

        $this->loadMigrationsFrom($paths);
    }
}
