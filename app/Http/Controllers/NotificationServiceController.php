<?php

namespace App\Http\Controllers;

use App\Facades\Notification;
use App\Services\NotificationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;

class NotificationServiceController extends Controller
{
    function sendNotification()
    {
         //// The instance is created as a singleton in the NotificationServiceProvider class
         // $notification = app(NotificationService::class);

         //// Sending the notification using the sendNotification method in the notification service class.
         // dd($notification->sendNotification('Hello Welcome to our App', 'person@new.ng'));


        // Using the Facade way to call the method in our NotificationService class.
        $notification = Notification::sendNotification('Hello Your account has been activated', 'person@new.ng');

        dd($notification);
    }

}
