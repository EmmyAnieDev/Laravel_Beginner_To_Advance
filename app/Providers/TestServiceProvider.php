<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Binding the 'test_service' to the service container,
        // so it can be resolved and used later when needed.
        app()->bind('test_service', function () {
            dd("This is my first service");
        });

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
