<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactUs;
use App\Mail\newContactInq;
use App\contactus as ctu;

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
        \Mail::to($request->email)->cc("saurabh@nemateacompany.com")->bcc("laxmannema@gmail.com")
        ->send(new contactUs($fullname));

        \Mail::to("saurabh@nemateacompany.com")->cc("nemateacompany@gmail.com")->bcc("laxmannema@gmail.com")
        ->send(new newContactInq($data));

        return redirect('/')->with("success","Message is sent successfully it'll take 24 hrs to evalute it.");

    }
}
