<?php

namespace App\Http\Controllers;

use App\User ;
use DB ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::paginate(5) ;
        return view('users')->with('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addUser') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('taha');
        $this->validate($request, [
            'name' => 'required|alpha|min:3|max:25',
            'type' => 'required|alpha',
            'streetNo' => 'required',
            'password' => 'required|min:6|max:30',
            'city' => 'required|alpha|min:3|max:30',
            'state' => 'required|alpha|min:3|max:30',
            'status' => 'required|alpha',
            'zipCode' => 'required|numeric',
            'phoneNo' => 'required|unique:users|numeric',
            'email' => 'required|email|unique:users',
            'comments' => 'required',
        ]);

        $user1 = new User ;
        $user1->name = $request->input('name') ;
        $user1->type = $request->input('type') ;
        $user1->streetNo = $request->input('streetNo') ;
        $user1->password = Hash::make($request->input('password')) ;
        //$user1->password = $request->input('password') ;
        $user1->city = $request->input('city') ;
        $user1->state = $request->input('state') ;
        $user1->zipCode = $request->input('zipCode') ;
        $user1->phoneNo = $request->input('phoneNo') ;
        $user1->email = $request->input('email') ;
        $user1->status = $request->input('status') ;
        $user1->comments = $request->input('comments') ;

        $user1->save() ;
        //return $user1;
        return redirect('/user/')->with('success', 'user added to the list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id) ;
        return view('userEdit')->with('data', $data) ;
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
            'name' => 'required|alpha|min:3|max:25',
            'type' => 'required|alpha',
            'streetNo' => 'required',
            'password' => 'required|min:6|max:30',
            'city' => 'required|alpha|min:3|max:30',
            'state' => 'required|alpha',
            'status' => 'required|alpha',
            'zipCode' => 'required|numeric',
            'phoneNo' => 'required|numeric',
            'email' => 'required|email',
            'comments' => 'required',
        ]
        );

        $user1 = User::find($id) ;
        $user1->name = $request->input('name') ;
        $user1->type = $request->input('type') ;
        $user1->streetNo = $request->input('streetNo') ;
        $user1->city = $request->input('city') ;
        $user1->state = $request->input('state') ;
        $user1->zipCode = $request->input('zipCode') ;
        $user1->phoneNo = $request->input('phoneNo') ;
        $user1->email = $request->input('email') ;
        $user1->status = $request->input('status') ;
        $user1->comments = $request->input('comments') ;
        $user1->password = Hash::make($request->input('password')) ;
        $user1->save() ;

        return redirect('/users/')->with('success', 'user updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user1 = user::find($id) ;
        $user1->delete() ;
        return redirect('/users/')->with('success', 'user removed');
    }
}
