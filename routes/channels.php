<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// Authorizes any authenticated user to access the 'chat' channel.
Broadcast::channel('chat', function ($user) {
    return true;
});

