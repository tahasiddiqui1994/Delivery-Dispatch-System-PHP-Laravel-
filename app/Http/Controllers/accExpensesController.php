<?php

namespace App\Http\Controllers;

use App\load ;
use App\truck ;
use App\accExpense ;
use DB ;
use Illuminate\Http\Request;

class accExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $data = DB::table('acc_expenses')->get() ;
        return view('accExpenses')->with('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::select('SELECT expenseCategory FROM expenses') ;
        $trucks = DB::select('SELECT truckNo FROM trucks') ;
        $loads = DB::select('SELECT loadNo FROM loads') ;

        return view('addAccExpense', [
            'categories' => $categories,
            'trucks' => $trucks,
            'loads' => $loads,
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
            'loadNo' => 'required',
            'truckNo' => 'required',
            'expenseCategory' => 'required|alpha',
            'expenseDate' => 'required',
            'amount' => 'required|numeric',
            'odometerReading' => 'required',
            'comments' => 'required',
        ]);

        $expense = new accExpense ;
        $expense->loadNo = $request->input('loadNo') ;
        $expense->expenseCategory = $request->input('expenseCategory') ;
        $expense->expenseDate = $request->input('expenseDate') ;
        $expense->truckNo = $request->input('truckNo') ;
        $expense->amount = $request->input('amount') ;
        $expense->odometerReading = $request->input('odometerReading') ;
        $expense->comments = $request->input('comments') ;

        $expense->save() ;
        //return $expense ;
        return redirect('/accExpense/')->with('success', 'New expense added to the list');
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
        $categories = DB::select('SELECT expenseCategory FROM expenses') ;
        $trucks = DB::select('SELECT truckNo FROM trucks') ;
        $loads = DB::select('SELECT loadNo FROM loads') ;
        $data = accExpense::find($id) ;

        return view('accExpenseEdit', [
            'categories' => $categories,
            'trucks' => $trucks,
            'loads' => $loads,
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
    {        
        $this->validate($request, [
            'loadNo' => 'required',
            'truckNo' => 'required',
            'expenseCategory' => 'required|alpha',
            'expenseDate' => 'required',
            'amount' => 'required|numeric',
            'odometerReading' => 'required',
            'comments' => 'required',
        ]);

        $expense = accExpense::find($id) ;
        $expense->loadNo = $request->input('loadNo') ;
        $expense->expenseCategory = $request->input('expenseCategory') ;
        $expense->expenseDate = $request->input('expenseDate') ;
        $expense->truckNo = $request->input('truckNo') ;
        $expense->amount = $request->input('amount') ;
        $expense->odometerReading = $request->input('odometerReading') ;
        $expense->comments = $request->input('comments') ;

        $expense->save() ;
        //return $expense ;
        return redirect('/accExpense/')->with('success', 'Expense Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expense = accExpense::find($id) ;
        $expense->delete() ;

        return redirect('/accExpense/')->with('success', 'Expense removed');
    }
}
