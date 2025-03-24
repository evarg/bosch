<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

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

        View::composer('layout_default.navbar', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();

                $role = 'moderator';
                $avatar = 'assets/img/avatars/1.png';

                $userProfile = [
                    'id' => '1',
                    'name' => $user->nick,
                    'role' => $role,
                    'avatar' => $avatar,
                    'badges' => [
                        'id' => '0',
                        'profile' => '1',
                        'settings' => '2',
                        'role' => '0',
                        'billing' => '3',
                    ],
                ];
                $view->with('userProfile', $userProfile);
            }
        });
    }
}
