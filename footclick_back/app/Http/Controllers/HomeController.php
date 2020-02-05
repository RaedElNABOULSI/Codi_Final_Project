<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function mail(Request $request)
    {

        // $senderName = $request->senderName;
        // $email = $request->email;
        // $message = $request->message;
        // $subject = $request->subject;

        // $to_name = "Raed";
        // $to_email = "raedelnaboulsi@gmail.com";
        // $mailheader = "From: $email \r\n";
        // $content = "From: $senderName \nEmail: $email \nMessage: $message";
        // //  Mail::to('raed_nb@hotmail.com')->send(new SendMailable('Raed'));
        // // mail($recipient, $subject, $content, $mailheader);
        // return response()->json(array('senderName' => $senderName, 'message' => 'Message was successfully sent!'));

        $to_name = 'Raed';
        $to_email = 'raedelnaboulsi@gmail.com';
        $data = array("name" => 'Ogbonna Vitalis', "body" => 'A test mail');
        Mail::send('mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Laravel Test Mail');
            $message->from('SENDER_EMAIL_ADDRESS', 'Test Mail');
        });
    }
}
