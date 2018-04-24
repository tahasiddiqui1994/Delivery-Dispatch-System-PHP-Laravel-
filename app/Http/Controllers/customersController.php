<?php

namespace App\Http\Controllers;

use App\customer ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB ;

class customersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = customer::paginate(5);
        return view('customers')->with('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addCustomer') ;
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
            'companyName' => 'required|alpha|min:3|max:25|unique:customers',
            'customerType' => 'required',
            'streetNo' => 'required',
            'aptOrSuiteOrOther' => 'required',
            'city' => 'required|alpha|min:3|max:30',
            'status' => 'required|alpha',
            'state' => 'required|alpha|min:3|max:30',
            'zipCode' => 'required|numeric',
            'phoneNo' => 'required|unique:customers|numeric',
            'email' => 'required|email|unique:customers',
            'taxID' => 'required',
        ]);

        $customer1 = new customer ;
        $customer1->companyName = $request->input('companyName') ;
        $customer1->customerType = $request->input('customerType') ;
        $customer1->streetNo = $request->input('streetNo') ;
        $customer1->aptOrSuiteOrOther = $request->input('aptOrSuiteOrOther') ;
        $customer1->city = $request->input('city') ;
        $customer1->state = $request->input('state') ;
        $customer1->zipCode = $request->input('zipCode') ;
        $customer1->phoneNo = $request->input('phoneNo') ;
        $customer1->email = $request->input('email') ;
        $customer1->website = $request->input('website') ;
        $customer1->motorCarrierNo = $request->input('motorCarrierNo') ;
        $customer1->taxID = $request->input('taxID') ;
        $customer1->comments = $request->input('comments') ;
        $customer1->status = $request->input('status') ;

        $customer1->save() ;

        return redirect('/customer/')->with('success', 'Customer added to the list');
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
        $data = customer::find($id) ;
        return view('customerEdit')->with('data', $data) ;
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
            'companyName' => 'required|min:3|max:25',
            'customerType' => 'required',
            'streetNo' => 'required',
            'aptOrSuiteOrOther' => 'required',
            'city' => 'required|alpha|min:3|max:30',
            'status' => 'required|alpha',
            'state' => 'required|alpha|min:3|max:30',
            'zipCode' => 'required|numeric',
            'phoneNo' => 'required|numeric',
            'email' => 'required|email',
            'taxID' => 'required',
        ]);

        $customer1 = customer::find($id) ;
        $customer1->companyName = $request->input('companyName') ;
        $customer1->customerType = $request->input('customerType') ;
        $customer1->streetNo = $request->input('streetNo') ;
        $customer1->aptOrSuiteOrOther = $request->input('aptOrSuiteOrOther') ;
        $customer1->city = $request->input('city') ;
        $customer1->state = $request->input('state') ;
        $customer1->zipCode = $request->input('zipCode') ;
        $customer1->phoneNo = $request->input('phoneNo') ;
        $customer1->email = $request->input('email') ;
        $customer1->website = $request->input('website') ;
        $customer1->motorCarrierNo = $request->input('motorCarrierNo') ;
        $customer1->taxID = $request->input('taxID') ;
        $customer1->comments = $request->input('comments') ;
        $customer1->status = $request->input('status') ;

        $customer1->save() ;

        return redirect('/customer/')->with('success', 'Customer Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer1 = customer::find($id) ;
        $customer1->delete() ;
        return redirect('/truck/')->with('success', 'Truck removed');
    }
}
