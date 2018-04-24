<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\webgeneral ;
use App\Http\Controllers\Controller;
use DB;

class webgeneralsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('webgenerals')->get();
        return view('generals')->with('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = webgeneral::find($id) ;
        return view('generalEdit')->with('data', $data) ;
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
            'companyName' => 'required',
            'companyType' => 'required',
            'streetNo' => 'required',
            'aptOrSuiteOrOther' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipCode' => 'required',
            'phoneNo' => 'required',
            'email' => 'required',
            'timezone' => 'required',
        ]);

        $webgeneral1 = webgeneral::find($id) ;
        $webgeneral1->timezone = $request->input('timezone') ;
        $webgeneral1->comments = $request->input('comments') ;
        $webgeneral1->companyName = $request->input('companyName') ;
        $webgeneral1->zipCode = $request->input('zipCode') ;
        $webgeneral1->phoneNo = $request->input('phoneNo') ;
        $webgeneral1->city = $request->input('city') ;
        $webgeneral1->state = $request->input('state') ;
        $webgeneral1->email = $request->input('email') ;
        $webgeneral1->companyType = $request->input('companyType') ;
        $webgeneral1->aptOrSuiteOrOther = $request->input('aptOrSuiteOrOther') ;
        $webgeneral1->streetNo = $request->input('streetNo') ;

        $webgeneral1->save() ;

        return redirect('/webgeneral/')->with('success', 'General Settings updated');
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
