<?php

namespace App\Http\Controllers;

use App\expense ;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class expensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = expense::paginate(5) ;
        return view('expensesCategory')->with('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addExpenseCategory') ;
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
            'expenseCategory' => 'required|alpha|max:20|min:3',
            'comments' => 'required|string',
        ]);

        $expenseCategory1 = new expense ;
        $expenseCategory1->expenseCategory = $request->input('expenseCategory') ;
        $expenseCategory1->comments = $request->input('comments') ;

        $expenseCategory1->save() ;

        return redirect('/expenseCategory/')->with('success', 'Expense Category Type added to the list');
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
        $data = expense::find($id) ;
        return view('expenseCategoryEdit')->with('data', $data) ;
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
            'expenseCategory' => 'required|alpha|max:20|min:3',
            'comments' => 'required|string',
        ]);

        $expenseCategory1 = expense::find($id) ;
        $expenseCategory1->expenseCategory = $request->input('expenseCategory') ;
        $expenseCategory1->comments = $request->input('comments') ;

        $expenseCategory1->save() ;

        return redirect('/expenseCategory/')->with('success', 'Expense Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expenseCategory1 = expense::find($id) ;
        $expenseCategory1->delete() ;
        return redirect('/expenseCategory/')->with('success', 'Expense Category Type removed');
    }
}
