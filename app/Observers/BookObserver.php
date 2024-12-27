<?php

namespace App\Observers;

use App\Mail\BookCreateMail;
use App\Models\Book;
use Illuminate\Support\Facades\Mail;

class BookObserver
{
    /**
     * Handle the Book "created" event.
     */
    public function created(Book $book): void
    {
        // We can get the instance of the created book from this function
        // and use it to send an email notification with the book instance.
        Mail::to('mary@mary.cng')->queue(new BookCreateMail());
    }

    /**
     * Handle the Book "updated" event.
     */
    public function updated(Book $book): void
    {
        //
    }

    /**
     * Handle the Book "deleted" event.
     */
    public function deleted(Book $book): void
    {
        //
    }

    /**
     * Handle the Book "restored" event.
     */
    public function restored(Book $book): void
    {
        //
    }

    /**
     * Handle the Book "force deleted" event.
     */
    public function forceDeleted(Book $book): void
    {
        //
    }
}
