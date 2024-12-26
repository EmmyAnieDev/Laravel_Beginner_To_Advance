<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomeEmail;
use App\Models\User;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail()
    {
        $user = User::findOrFail(7);

        // Dispatches a new job to send a welcome email to the specified user.
        dispatch(new SendWelcomeEmail($user));

        dd('mail send successfully');
    }
}
