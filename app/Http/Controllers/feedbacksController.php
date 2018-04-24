<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User ;
use App\feedback ;
use DB ;
use Illuminate\Http\Request;

class feedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')->get() ;
        $feedback = DB::table('feedback')->get() ;

        return view('feedback', [
            'data' => $data,
            'feedback' => $feedback,
        ]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::table('users')->get() ;
        return view('addFeedback')->with('users', $users) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'senderId' => 'required|numeric',
            'title' => 'required|unique:feedback',
            'comments' => 'required',
            'status' => 'required|alpha',
            'senderName' => 'required',
            'senderEmail' => 'required|email',
            'senderName' => 'required',
            'receiverName' => 'required',
            'receiverEmail' => 'required|email',
            'receiverId' => 'required|numeric',
            'receiverName' => 'required',
        ]);

        $feedback1 = new feedback ;
        $feedback1->senderId = $request->input('senderId') ;
        
        $Val = DB::table('users')->where('id', $feedback1->senderId)->get(['name']) ;
        foreach ($Val as $v) {
            $feedback1->senderName =  $v->name ;
        }
        $Val = DB::table('users')->where('id', $feedback1->senderId)->get(['email']) ;
        foreach ($Val as $v) {
            $feedback1->senderEmail = $v->email ;
        }
        $Val = DB::table('users')->where('id', $feedback1->senderId)->get(['status']) ;
        foreach ($Val as $v) {
            $feedback1->senderStatus = $v->status ;
        }

        $feedback1->receiverId = $request->input('receiverId') ;

        $Val = DB::table('users')->where('id', $feedback1->receiverId)->get(['name']) ;
        foreach ($Val as $v) {
            $feedback1->receiverName =  $v->name ;
        }
        $Val = DB::table('users')->where('id', $feedback1->receiverId)->get(['email']) ;
        foreach ($Val as $v) {
            $feedback1->receiverEmail = $v->email ;
        }
        $Val = DB::table('users')->where('id', $feedback1->receiverId)->get(['status']) ;
        foreach ($Val as $v) {
            $feedback1->receiverStatus = $v->status ;
        }

        $feedback1->title = $request->input('title') ;
        $feedback1->status = $request->input('status') ;
        $feedback1->comments = $request->input('comments') ;

        $feedback1->save() ;

        return redirect('/feedback/')->with('success', 'Feedback Sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status' => 'required',
        ]);

        $feedback1 = feedback::find($id) ;
        if ($request->input('status') == "Unsolved") {
            $feedback1->status = "Solved" ;
        }
        else{
            $feedback1->status = "Unsolved" ;
        }
        
        $feedback1->save() ;

        return redirect('/feedback/')->with('success', 'Feedback updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
