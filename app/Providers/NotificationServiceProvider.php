<?php

namespace App\Providers;

use App\Services\NotificationService;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Registering the NotificationService class as a singleton in the service container.
        // This ensures the same instance of NotificationService is used throughout the application.
        $this->app->singleton(NotificationService::class, function ($app) {
            return new NotificationService();
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
