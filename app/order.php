<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $fillable = [
        'user_id','price','quantity','product_name','status','payment_type',
    ];
}
