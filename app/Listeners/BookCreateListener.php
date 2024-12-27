<?php

namespace App\Listeners;

use App\Events\BookCreateEvent;
use App\Mail\BookCreateMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class BookCreateListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BookCreateEvent $event): void
    {
        // Clear view cache (optional: only for testing/debugging)
        Artisan::call('view:clear');

        Mail::to($event->email)->queue(new BookCreateMail());
    }
}
