<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        if ($request->method() === 'POST')
        {
            sleep(5);
            Mail::to('test@test.ru')
                ->send((new TestMail())->from('ilnazamirha@mail.ru'));
        }
        return view('testmail');
    }
}
