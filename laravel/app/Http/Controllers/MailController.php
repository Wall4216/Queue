<?php

namespace App\Http\Controllers;

use App\Jobs\LongJob;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        if ($request->method() === 'POST')
        {
            LongJob::dispatch()->onQueue('email_queue');
        }
        return view('testmail');
    }
}
