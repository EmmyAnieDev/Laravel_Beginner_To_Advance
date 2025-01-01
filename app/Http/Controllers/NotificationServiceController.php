<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use Illuminate\Http\Request;

class NotificationServiceController extends Controller
{
    function sendNotification()
    {
        // The instance is created as a singleton in the NotificationServiceProvider class
        $notification = app(NotificationService::class);

        // Sending the notification using the sendNotification method in the notification service class.
        dd($notification->sendNotification('Hello Welcome to our App', 'person@new.ng'));
    }

}
