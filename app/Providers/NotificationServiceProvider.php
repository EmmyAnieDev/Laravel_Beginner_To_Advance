<?php

namespace App\Providers;

use App\Services\NotificationService;
use Illuminate\Support\Facades\Facade;
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
     *
     * The boot method is executed when the application is booting.
     */
    public function boot(): void
    {
        // Here, we are assigning an alias 'Notification' to the NotificationService class.
        // This allows us to reference the service using the alias, matching the name used in the facade.
        $this->app->alias(NotificationService::class, 'Notification');
    }

}
