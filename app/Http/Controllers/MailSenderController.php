<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactUs;
use App\Mail\newContactInq;
use App\Mail\suggestions;
use App\Mail\suggestionsInq;
use App\Mail\OrderReceived;
use App\Mail\GotYourOrder;
use App\contactus as ctu;
use App\Mail\RegistrationMail;

class MailSenderController extends Controller
{
    //

    public function contactus(Request $request)
    {
        $fullname = $request->name;

        $data = [
            "fullName" => $request->name,
            "email" => $request->email,
            "number" => $request->number,
            "subject" => $request->subject,
            "message" => $request->message
        ];
        
        // This is for customer
        \Mail::to($request->email)->bcc("laxmannema@gmail.com")
        ->send(new contactUs($fullname));

        \Mail::to("saurabh@nemateacompany.com")->cc("laxmannema@gmail.com")
        ->send(new newContactInq($data));

        return redirect('/')->with("success","Message is sent successfully it'll take 24 hrs to evalute it, Thanks for you Time.");

    }

    public function suggestions(Request $request)
    {
        $fullname = $request->name;

        $data = [
            "fullName" => $request->name,
            "email" => $request->email,
            "number" => $request->number,
            "subject" => $request->subject,
            "message" => $request->message
        ];
        
        // This is for customer
        \Mail::to($request->email)->bcc("laxmannema@gmail.com")
        ->send(new suggestions($fullname));

        \Mail::to("saurabh@nemateacompany.com")->cc("laxmannema@gmail.com")
        ->send(new suggestionsInq($data));

        return redirect('/suggestion')->with("suggestion","Message is sent successfully it'll take 24 hrs to evalute it, Thanks for your Time.");
    }

    public function feedback(Request $request)
    {
        $fullname = $request->name;

        $data = [
            "fullName" => $request->name,
            "email" => $request->email,
            "number" => $request->number,
            "subject" => $request->subject,
            "message" => $request->message
        ];
        
        // This is for customer
        \Mail::to($request->email)->bcc("laxmannema@gmail.com")
        ->send(new suggestions($fullname));

        \Mail::to("saurabh@nemateacompany.com")->cc("laxmannema@gmail.com")
        ->send(new suggestionsInq($data));

        return redirect('/feedback')->with("suggestion","Message is sent successfully it'll take 24 hrs to evalute it, Thanks for your Time.");
    }

    public static function OrderMailtoAdmin($data)
    {
        $test = \Mail::to('saurabh@nemateacompany.com')->send(new OrderReceived($data));
        return $test;
    }

    public static function OrderMailtoPerson($data)
    {
        $test = \Mail::to($data['user']['email'])->send(new GotYourOrder($data));
        return $test;
    }

    public static function RegistrationMail($data)
    {
        \Mail::to($data['email'])->send(new Registrationmail($data));
    }
}

