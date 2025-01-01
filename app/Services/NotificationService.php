<?php

namespace App\Services;

class NotificationService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function sendNotification($message, $recipient)
    {
        return "Notification sent to $recipient with message: $message";
    }
}
