<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    
    function index()
    {
     return view('email.send_email');
    }


    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
        
        );

     Mail::to($request->email)->send(new SendMail($data));
     return back()->with('success', 'Email Envoyee Avec Succes!');

    }

}
