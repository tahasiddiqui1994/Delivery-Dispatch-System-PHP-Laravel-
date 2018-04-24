<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\driver ;
use App\Http\Controllers\Controller;
use DB;

class driversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customPaginate(){

    }
    
    public function index()
    {
        $data = driver::all() ;
        return view('drivers')->with('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addDriver') ;
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
            'firstName' => 'required|alpha|min:3|max:25',
            'lastName' => 'required|alpha|min:3|max:25',
            'streetNo' => 'required',
            'state' => 'required|alpha|min:3|max:25',
            'city' => 'required|alpha|min:3|max:25',
            'paymentType' => 'required',
            'emergencyContactName' => 'required|alpha',
            'emergencyPhoneNo' => 'required|numeric',
        ]);

        $driver1 = new driver ;
        $driver1->firstName = $request->input('firstName') ;
        $driver1->lastName = $request->input('lastName') ;
        $driver1->streetNo = $request->input('streetNo') ;
        $driver1->city = $request->input('city') ;
        $driver1->state = $request->input('state') ;
        $driver1->aptOrSuiteOrOther = $request->input('aptOrSuiteOrOther') ;
            if ($driver1->aptOrSuiteOrOther == null) {
            $driver1->aptOrSuiteOrOther = 'N/A' ;
        }
        $driver1->zipCode = $request->input('zipCode') ;
            if ($driver1->zipCode == null) {
            $driver1->zipCode = 0 ;
        }
        $driver1->phoneNo = $request->input('phoneNo') ;
            if ($driver1->phoneNo == null) {
            $driver1->phoneNo = 'N/A' ;
        }
        $driver1->email = $request->input('email') ;
            if ($driver1->email == null) {
            $driver1->email = 'N/A' ;
        }
        $driver1->paymentType = $request->input('paymentType') ;
        $driver1->licenseNo = $request->input('licenseNo') ;
            if ($driver1->licenseNo == null) {
            $driver1->licenseNo = 'N/A' ;
        }
        $driver1->licenseExpiryDate = $request->input('licenseExpiryDate') ;
            if ($driver1->licenseExpiryDate == null) {
            $driver1->licenseExpiryDate = 'N/A' ;
        }
        $driver1->licenseIssuingState = $request->input('licenseIssuingState') ;
            if ($driver1->licenseIssuingState == null) {
            $driver1->licenseIssuingState = 'N/A' ;
        }
        $driver1->medicalCardRenewal = $request->input('medicalCardRenewal') ;
            if ($driver1->medicalCardRenewal == null) {
            $driver1->medicalCardRenewal = 'N/A' ;
        }
        $driver1->hireDate = $request->input('hireDate') ;
            if ($driver1->hireDate == null) {
            $driver1->hireDate = 'N/A' ;
        }
        $driver1->terminationDate = $request->input('terminationDate') ;
            if ($driver1->terminationDate == null) {
            $driver1->terminationDate = 'N/A' ;
        }
        $driver1->emergencyContactName = $request->input('emergencyContactName') ;
        $driver1->emergencyPhoneNo = $request->input('emergencyPhoneNo') ;

        $driver1->save() ;

        return redirect('/driver/')->with('success', 'Driver added to the list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = driver::find($id) ;
        return view('driversFull')->with('data', $data) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = driver::find($id) ;
        return view('driverEdit')->with('data', $data) ;
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
            'firstName' => 'required|alpha|min:3|max:25',
            'lastName' => 'required|alpha|min:3|max:25',
            'streetNo' => 'required',
            'state' => 'required|alpha|min:3|max:25',
            'city' => 'required|alpha|min:3|max:25',
            'paymentType' => 'required',
            'emergencyContactName' => 'required|alpha',
            'emergencyPhoneNo' => 'required|numeric',
        ]);

        $driver1 = driver::find($id) ;
        $driver1->firstName = $request->input('firstName') ;
        $driver1->lastName = $request->input('lastName') ;
        $driver1->streetNo = $request->input('streetNo') ;
        $driver1->city = $request->input('city') ;
        $driver1->state = $request->input('state') ;
        $driver1->aptOrSuiteOrOther = $request->input('aptOrSuiteOrOther') ;
            if ($driver1->aptOrSuiteOrOther == null) {
            $driver1->aptOrSuiteOrOther = 'N/A' ;
        }
        $driver1->zipCode = $request->input('zipCode') ;
            if ($driver1->zipCode == null) {
            $driver1->zipCode = 0 ;
        }
        $driver1->phoneNo = $request->input('phoneNo') ;
            if ($driver1->phoneNo == null) {
            $driver1->phoneNo = 'N/A' ;
        }
        $driver1->email = $request->input('email') ;
            if ($driver1->email == null) {
            $driver1->email = 'N/A' ;
        }
        $driver1->paymentType = $request->input('paymentType') ;
        $driver1->licenseNo = $request->input('licenseNo') ;
            if ($driver1->licenseNo == null) {
            $driver1->licenseNo = 'N/A' ;
        }
        $driver1->licenseExpiryDate = $request->input('licenseExpiryDate') ;
            if ($driver1->licenseExpiryDate == null) {
            $driver1->licenseExpiryDate = 'N/A' ;
        }
        $driver1->licenseIssuingState = $request->input('licenseIssuingState') ;
            if ($driver1->licenseIssuingState == null) {
            $driver1->licenseIssuingState = 'N/A' ;
        }
        $driver1->medicalCardRenewal = $request->input('medicalCardRenewal') ;
            if ($driver1->medicalCardRenewal == null) {
            $driver1->medicalCardRenewal = 'N/A' ;
        }
        $driver1->hireDate = $request->input('hireDate') ;
            if ($driver1->hireDate == null) {
            $driver1->hireDate = 'N/A' ;
        }
        $driver1->terminationDate = $request->input('terminationDate') ;
            if ($driver1->terminationDate == null) {
            $driver1->terminationDate = 'N/A' ;
        }
        $driver1->emergencyContactName = $request->input('emergencyContactName') ;
        $driver1->emergencyPhoneNo = $request->input('emergencyPhoneNo') ;
        
        $driver1->save() ;
        //return $driver1;
        return redirect('/driver/')->with('success', 'Driver updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver1 = driver::find($id) ;
        $driver1->delete() ;
        return redirect('/driver/')->with('success', 'Driver removed');
    }
}
