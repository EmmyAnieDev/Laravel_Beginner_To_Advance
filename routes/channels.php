<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// The $user represents the currently authenticated user from the frontend (listener).
// The $id is the placeholder in the channel name (e.g., 'chat.19').
Broadcast::channel('chat.{id}', function ($user, $id) {

    // Grant permission to listen to the event if the logged-in user's ID matches the channel's ID.
    return (int) $user->id === (int) $id;
});

// This channel is a presence channel named 'online'. It allows you to track users who are currently
// connected, joined, or leaving the channel. The user data returned includes all the user's attributes as an array.
Broadcast::channel('online', function ($user) {
    return $user->toArray();
});


