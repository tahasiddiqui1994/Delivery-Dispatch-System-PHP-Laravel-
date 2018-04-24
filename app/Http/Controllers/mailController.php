<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
	public function send(Request $request){
		$this->validate($request, [
			'email' => 'required|email',
            'title' => 'required',
            'content' => 'required'
        ]);

		$email = (string)$request->input('email') ;
		$title = (string)$request->input('title') ;
		$content = (string)$request->input('content') ;


	Mail::send('emailView', ['content' => $request->input('content')], function ($message)
	    {
	        $message->from('siddiquitaha5@gmail.com', 'Taha')->subject('Hi Zawar') ;
	        $message->to($email, 'Siddiqui');
	    });

	    return response()->json(['message' => 'Email sent successfully']);
	}

	public function email(){
		return view('email') ;
	}
}
