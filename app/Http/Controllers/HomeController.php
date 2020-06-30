<?php

namespace App\Http\Controllers;

use App\User;
use App\order;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $order = $user->order;
        $totalorder = count($order);
        $data = [
            'user' => $user,
            'order' =>$order->take(2),
            'total_order' => $totalorder,
        ];
        return view('home')->with('data',$data);
    }
}
