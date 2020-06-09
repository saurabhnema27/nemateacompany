<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Jenkins trigger will work this time
|
*/

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return view('index');
});

route::get('/feedback',function(){
    return view('feedback');
});

Route::post('/contactus','MailSenderController@contactus');