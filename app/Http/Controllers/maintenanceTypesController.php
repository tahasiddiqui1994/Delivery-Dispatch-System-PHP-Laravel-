<?php

namespace App\Http\Controllers;

use App\maintenanceType ;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class maintenanceTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = maintenanceType::paginate(5) ;
        return view('maintenanceTypes')->with('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AddMaintenanceType') ;
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
            'maintenanceType' => 'required|alpha|max:25',
            'comments' => 'required|string',
        ]);

        $maintenanceType1 = new maintenanceType ;
        $maintenanceType1->maintenanceType = $request->input('maintenanceType') ;
        $maintenanceType1->comments = $request->input('comments') ;

        $maintenanceType1->save() ;

        return redirect('/maintenanceType/')->with('success', 'Maintenance Type added to the list');
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
        $data = maintenanceType::find($id) ;
        return view('maintenanceTypeEdit')->with('data', $data) ;
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
            'maintenanceType' => 'required|alpha|max:25',
            'comments' => 'required|string',
        ]);

        $maintenanceType1 = maintenanceType::find($id) ;
        $maintenanceType1->maintenanceType = $request->input('maintenanceType') ;
        $maintenanceType1->comments = $request->input('comments') ;

        $maintenanceType1->save() ;

        return redirect('/maintenanceType/')->with('success', 'Maintenance Type Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maintenanceType1 = maintenanceType::find($id) ;
        $maintenanceType1->delete() ;
        return redirect('/maintenanceType/')->with('success', 'Maintenance Type removed');
    }
}
