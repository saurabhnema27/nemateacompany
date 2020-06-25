<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\order;
use Auth;
use App\Http\Controllers\MailSenderController;

class BuyController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $order = order::where('user_id',$user->id)->latest()->first();
        $data = [
            'user' => $user,
            'order' => $order
        ];
        return view('buy')->with('data',$data);
    }

    public function placeOrder(Request $req)
    {
        $user = Auth::user();
        if($user->living_in != "Bhopal" && $user->living_in != "bhopal")
        {
            return redirect('/home')->with("error","We are not taking any order out of bhopal right now but stay tune we'll doing it soon");
        }

        $order = new order;
        if(($req->price / $req->quant) === 320)
        {
            $order->quantity = $req->quant;
            $order->price = $req->price;
            $order->product_name = "Tea Leaves";
            $order->user_id = $user->id;
            $order->payment_type = "Cash On delivery";
            $order->status = "Inprogress";
            $order->save();
        }
        elseif(($req->price / $req->quant) === 250)
        {
            $order->quantity = $req->quant;
            $order->price = $req->price;
            $order->product_name = "Granuality Tea";
            $order->user_id = $user->id;
            $order->payment_type = "Cash On delivery";
            $order->status = "Inprogress";
            $order->save();
        }
        else
        {
            $order->quantity = $req->quant;
            $order->price = $req->price;
            $order->product_name = "Dust Tea";
            $order->user_id = $user->id;
            $order->payment_type = "Cash On delivery";
            $order->status = "Inprogress";
            $order->save();
        }

        $data = [
            'user' => $user,
            'order' => $order
        ];

        MailSenderController::OrderMailtoAdmin($data);
        MailSenderController::OrderMailtoPerson($data);

        return redirect('/home')->with("order","Order Place successfully it'll take 24 hours to deliver at your door steps, Thanks for choosing NTC");
    }

    public function orderhistory()
    {
        $user = Auth::user();
        $order = $user->order;
        return view('orderhistory')->with('order',$order);

    }
}

