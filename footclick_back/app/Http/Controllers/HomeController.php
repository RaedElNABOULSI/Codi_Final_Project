<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mail(Request $request)
    {
       $name = 'Raed';
    //    Mail::to('raed_nb@hotmail.com')->send(new SendMailable($name));
      $result=$request->get('email');
       return $result;
    }
}
