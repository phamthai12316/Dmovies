<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class contactformController extends Controller
{
  public  function index(){
    return view('contact');
  }

  public function send(Request $request){
    $this->validate($request, [

                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required'
    ]);

    $data  = array(

      'name' => $request->name,
        'subject' => $request->subject,
        'message' => $request->message,
        'email' => $request->email, );

    Mail::to('chandhupatrick@gmail.com')->send(new SendMail($data));
    return back()->with('success', 'Thanks For Contacting us!');
  }
}
