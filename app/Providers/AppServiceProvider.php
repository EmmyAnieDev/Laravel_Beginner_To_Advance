<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\User;
use App\Models\Post;
use App\Observers\BookObserver;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Binding a closure to the 'first_class' abstract name in the service container.
        // When 'first_class' is resolved, the closure will be executed,
        // and it will return the message "This is my first service".
        app()->bind('first_class', function () {
            dd("This is my first service");
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // check the current logged in user id and the post's user_id if it matches.
        Gate::define('update-post', function(User $user, Post $post){
            return $user->id === $post->user_id;
        });

        // Register the BookObserver to listen for model events on the Book model.
        Book::observe(BookObserver::class);
    }
}
