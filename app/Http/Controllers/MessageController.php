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

        event(new MessageEvent('This is a new message'));

        return 'Message sent';
    }
}
