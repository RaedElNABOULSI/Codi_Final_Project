<?php

use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    $to_name = 'Raed';
    $to_email = 'raedelnaboulsi@gmail.com';
    $data = array("name" => 'Ogbonna Vitalis', "body" => 'A test mail');
    Mail::send('mail', $data, function ($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)->subject('Laravel Test Mail');
        // $message->from('SENDER_EMAIL_ADDRESS', 'Test Mail');
    });
});
