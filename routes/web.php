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

route::get('/suggestion',function(){
    return view('suggestion');
});


route::post('suggestions','MailSenderController@suggestions');

Route::post('/contactus','MailSenderController@contactus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/buy','BuyController@index');
    Route::post('/place-order','BuyController@placeOrder');
    Route::get('/order-histroy','BuyController@orderhistroy');
    Route::post('/edit-details','UserController@update');
    Route::get('/order-history','BuyController@orderhistory');

});

