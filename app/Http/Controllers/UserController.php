<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    //
    public function update(Request $req)
    {
        $user = Auth::user();
        $user->update([
            'name' => $req->name ?: $user->name,
            'email' => $req->email ?: $user->email,
            'number' => $req->number ?: $user->number,
            'address' => $req->address ?: $user->address, 
            'living_in' => $req->living_in ?: $user->living_in,
            'pincode' => $req->pincode ?: $user->pincode,
        ]);

        return redirect('/home')->with('updated',"User details are updated successfully");
    }
}
