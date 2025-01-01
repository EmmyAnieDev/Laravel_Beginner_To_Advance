<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Notification extends Facade
{

    # The getFacadeAccessor method defines the alias or key used to resolve the underlying service from the service container.
    protected static function getFacadeAccessor()
    {
        // In this case, it returns 'Notification', which corresponds to the alias set in the service provider.
        // This allows the facade to access the NotificationService class through the service container using the alias.
        return 'Notification';
    }

}
