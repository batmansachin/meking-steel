<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactQuery;
use Mail;
use Session;

class ContactController extends Controller
{
    //
    public
    $email ="";
    public function contact(){

        return view('contact',['title'=>'Contact us - Meking Steel']);
    }
    public function postContact(Request $request){
    	$name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
       // dd($email);

	      \Mail::to('sachin.kumar@innovalabs.tech')->send(new ContactQuery($request->all()));

      /* Mail::send('/mails.query', ['name' => $name,], function ($message)
        {

            $message->from('sachin12kumar007@gmail.com', 'logan');

            $message->to('sachin.kumar@innovalabs.tech');

        });

        return response()->json(['message' => 'Request completed']);*/
    }

}
