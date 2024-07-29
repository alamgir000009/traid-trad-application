<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'number' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = [
            "name" => strip_tags(trim($request->name)),
            "email" => filter_var(trim($request->email), FILTER_SANITIZE_EMAIL),
            "subject" => trim($request->subject),
            "number" => trim($request->number),
            "message" => trim($request->message),
        ];

        dispatch(new \App\Jobs\ContactUs($data));

        return response()->json('Thank You! Your message has been sent.', 200);
    }
}
