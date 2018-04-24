<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\load ;
use App\driver ;
use App\customer ;
use App\truck ;
use App\shipper ;
use App\delivery ;
use DB ;

class loadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = load::paginate(5) ;
        return view('load')->with('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driver = DB::select('SELECT firstName FROM drivers') ;
        $shipper = DB::select('SELECT companyName FROM shippers') ;
        $truck = DB::select('SELECT truckNo FROM trucks') ;
        $customer = DB::select('SELECT companyName FROM customers') ;
        $delivery = DB::select('SELECT companyName FROM deliveries') ;

        return view('addLoad', [
            'drivers' => $driver,
            'shippers' => $shipper,
            'trucks' => $truck,
            'customers' => $customer,
            'deliveries' => $delivery,
        ]) ;
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
            'loadNo' => 'required|numeric',
            'customerName' => 'required',
            'driverName' => 'required',
            'truckNo' => 'required|numeric',
            'from' => 'required',
            'to' => 'required',
            'shipper' => 'required',
            'pickup' => 'required',
            'bol' => 'required',
            'customerInfo' => 'required',
            'weight' => 'required|numeric',
            'quantity' => 'required|numeric',
            'unit' => 'required',
            'comments' => 'required',
            'delivery' => 'required',
            'deliveryDate' => 'required',
            'primaryFee' => 'required|numeric',
            'primaryFeeType' => 'required',
            'fscAmount' => 'required|numeric',
            'fscAmountType' => 'required',
            'additional' => 'required|numeric',
            'detention' => 'required|numeric',
            'lumper' => 'required|numeric',
            'topoff' => 'required|numeric',
            'tarp' => 'required|numeric',
            'invoiceAdvance' => 'required|numeric',
        ]);

        $load = new load ;
        $load->loadNo = $request->input('loadNo') ;
        $load->customerName = $request->input('customerName') ;
        $load->driverName = $request->input('driverName') ;
        $load->truckNo = $request->input('truckNo') ;
        $load->shipper = $request->input('shipper') ;
        $load->pickup = $request->input('pickup') ;
        $load->bol = $request->input('bol') ;
        $load->customerInfo = $request->input('customerInfo') ;
        $load->weight = $request->input('weight') ;
        $load->quantity = $request->input('quantity') ;
        $load->unit = $request->input('unit') ;
        $load->comments = $request->input('comments') ;
        $load->delivery = $request->input('delivery') ;
        $load->deliveryDate = $request->input('deliveryDate') ;
        $load->primaryFee = $request->input('primaryFee') ;
        $load->primaryFeeType = $request->input('primaryFeeType') ;
        $load->fscAmount = $request->input('fscAmount') ;
        $load->fscAmountType = $request->input('fscAmountType') ;
        $load->additional = $request->input('additional') ;
        $load->detention = $request->input('detention') ;
        $load->lumper = $request->input('lumper') ;
        $load->topoff = $request->input('topoff') ;
        $load->tarp = $request->input('tarp') ;
        $load->invoiceAdvance = $request->input('invoiceAdvance') ;
        $load->from = $request->input('from') ;
        $load->to = $request->input('to') ;

        $load->save() ;

        return redirect('/load/')->with('success', 'New load added to the list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show' ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = DB::select('SELECT firstName FROM drivers') ;
        $shipper = DB::select('SELECT companyName FROM shippers') ;
        $truck = DB::select('SELECT truckNo FROM trucks') ;
        $customer = DB::select('SELECT companyName FROM customers') ;
        $delivery = DB::select('SELECT companyName FROM deliveries') ;
        $data = load::find($id) ;
        
        return view('loadEdit', [
            'drivers' => $driver,
            'shippers' => $shipper,
            'trucks' => $truck,
            'customers' => $customer,
            'deliveries' => $delivery,
            'data' => $data,
        ]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        $this->validate($request, [
            'loadNo' => 'required|numeric',
            'customerName' => 'required',
            'driverName' => 'required',
            'truckNo' => 'required|numeric',
            'from' => 'required',
            'to' => 'required',
            'shipper' => 'required',
            'pickup' => 'required',
            'bol' => 'required',
            'customerInfo' => 'required',
            'weight' => 'required|numeric',
            'quantity' => 'required|numeric',
            'unit' => 'required',
            'comments' => 'required',
            'delivery' => 'required',
            'deliveryDate' => 'required',
            'primaryFee' => 'required|numeric',
            'primaryFeeType' => 'required',
            'fscAmount' => 'required|numeric',
            'fscAmountType' => 'required',
            'additional' => 'required|numeric',
            'detention' => 'required|numeric',
            'lumper' => 'required|numeric',
            'topoff' => 'required|numeric',
            'tarp' => 'required|numeric',
            'invoiceAdvance' => 'required|numeric',
        ]);

        $load = load::find($id) ;
        $load->loadNo = $request->input('loadNo') ;
        $load->customerName = $request->input('customerName') ;
        $load->driverName = $request->input('driverName') ;
        $load->truckNo = $request->input('truckNo') ;
        $load->shipper = $request->input('shipper') ;
        $load->pickup = $request->input('pickup') ;
        $load->bol = $request->input('bol') ;
        $load->customerInfo = $request->input('customerInfo') ;
        $load->weight = $request->input('weight') ;
        $load->quantity = $request->input('quantity') ;
        $load->unit = $request->input('unit') ;
        $load->comments = $request->input('comments') ;
        $load->delivery = $request->input('delivery') ;
        $load->deliveryDate = $request->input('deliveryDate') ;
        $load->primaryFee = $request->input('primaryFee') ;
        $load->primaryFeeType = $request->input('primaryFeeType') ;
        $load->fscAmount = $request->input('fscAmount') ;
        $load->fscAmountType = $request->input('fscAmountType') ;
        $load->additional = $request->input('additional') ;
        $load->detention = $request->input('detention') ;
        $load->lumper = $request->input('lumper') ;
        $load->topoff = $request->input('topoff') ;
        $load->tarp = $request->input('tarp') ;
        $load->invoiceAdvance = $request->input('invoiceAdvance') ;
        $load->from = $request->input('from') ;
        $load->to = $request->input('to') ;

        $load->save() ;

        return redirect('/load/')->with('success', 'Load updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer1 = load::find($id) ;
        $customer1->delete() ;
        return redirect('/load/')->with('success', 'Truck removed');
    }
}
