<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function message() {
        return view('chat.message');
    }

    function sendMessage() {

        // Here, 19 represents the ID of the user (receiver) or the specific chat thread.
        event(new MessageEvent('This is a new message', 19));

        return 'Message sent';
    }
}
