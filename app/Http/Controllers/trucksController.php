<?php

namespace App\Http\Controllers;

use App\truck ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB ;

class trucksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = truck::paginate(5) ;
        return view('trucks')->with('data', $data) ;
        //$data = $data->toArray() ;
        //return view('trucks', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addTruck') ;
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
            'truckNo' => 'required|numeric',
            'truckType' => 'required|alpha',
            'ownership' => 'required',
        ]);

        $truck1 = new truck ;
        $truck1->truckNo = $request->input('truckNo') ;
        $truck1->type = $request->input('truckType') ;
        $truck1->ownerShipType = $request->input('ownership') ;
        $truck1->comments = $request->input('comments') ;
        $truck1->save() ;
        //$truck1 = $request->all();
        //$truck1 = $truck1->toArray()
        //DB::table('trucks')->insert($truck1->toArray());
        //truck::create($truck1);
        return redirect('/truck/')->with('success', 'Truck added to the list');
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
        $data = truck::find($id) ;
        return view('truckEdit')->with('data', $data) ;
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
            'truckNo' => 'required|numeric',
            'truckType' => 'required|alpha',
            'ownership' => 'required',
        ]);

        $truck1 = truck::find($id) ;
        $truck1->truckNo = $request->input('truckNo') ;
        $truck1->type = $request->input('truckType') ;
        $truck1->ownerShipType = $request->input('ownership') ;
        $truck1->comments = $request->input('comments') ;
        $truck1->save() ;
        //$truck1 = $request->all();
        //$truck1 = $truck1->toArray()
        //DB::table('trucks')->insert($truck1->toArray());
        //truck::create($truck1);
        return redirect('/truck/')->with('success', 'Truck Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $truck1 = truck::find($id) ;
        $truck1->delete() ;
        return redirect('/truck/')->with('success', 'Truck removed');
    }
}
