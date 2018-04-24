<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\delivery ;
use App\Http\Controllers\Controller;
use DB;

class deliveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = delivery::paginate(5) ;
        return view('deliveries')->with('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addDelivery') ;
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
            'companyName' => 'required|min:3|max:25|unique:deliveries',
            'customerType' => 'required',
            'streetNo' => 'required',
            'aptOrSuiteOrOther' => 'required',
            'city' => 'required|alpha|min:3|max:30',
            'state' => 'required|alpha|min:3|max:30',
            'zipCode' => 'required|numeric',
            'phoneNo' => 'required|numeric|unique:deliveries',
            'email' => 'required|email|unique:deliveries',
            'taxID' => 'required|numeric|unique:deliveries',
        ]);

        $delivery1 = new delivery ;
        $delivery1->companyName = $request->input('companyName') ;
        $delivery1->customerType = $request->input('customerType') ;
        $delivery1->streetNo = $request->input('streetNo') ;
        $delivery1->aptOrSuiteOrOther = $request->input('aptOrSuiteOrOther') ;
        $delivery1->city = $request->input('city') ;
        $delivery1->state = $request->input('state') ;
        $delivery1->zipCode = $request->input('zipCode') ;
        $delivery1->phoneNo = $request->input('phoneNo') ;
        $delivery1->email = $request->input('email') ;
        $delivery1->website = $request->input('website') ;
        $delivery1->motorCarrierNo = $request->input('motorCarrierNo') ;
        $delivery1->taxID = $request->input('taxID') ;
        $delivery1->comments = $request->input('comments') ;

        $delivery1->save() ;

        return redirect('/delivery/')->with('success', 'Receiver added to the list');
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
        $data = delivery::find($id) ;
        return view('deliveryEdit')->with('data', $data) ;
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
            'state' => 'required|alpha|min:3|max:30',
            'zipCode' => 'required|numeric',
            'phoneNo' => 'required|numeric',
            'email' => 'required|email',
            'taxID' => 'required|numeric',
        ]);

        $delivery1 = delivery::find($id) ;
        $delivery1->companyName = $request->input('companyName') ;
        $delivery1->customerType = $request->input('customerType') ;
        $delivery1->streetNo = $request->input('streetNo') ;
        $delivery1->aptOrSuiteOrOther = $request->input('aptOrSuiteOrOther') ;
        $delivery1->city = $request->input('city') ;
        $delivery1->state = $request->input('state') ;
        $delivery1->zipCode = $request->input('zipCode') ;
        $delivery1->phoneNo = $request->input('phoneNo') ;
        $delivery1->email = $request->input('email') ;
        $delivery1->website = $request->input('website') ;
        $delivery1->motorCarrierNo = $request->input('motorCarrierNo') ;
        $delivery1->taxID = $request->input('taxID') ;
        $delivery1->comments = $request->input('comments') ;

        $delivery1->save() ;

        return redirect('/delivery/')->with('success', 'Recipient updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delivery1 = delivery::find($id) ;
        $delivery1->delete() ;
        return redirect('/delivery/')->with('success', 'Recipient removed');
    }
}
