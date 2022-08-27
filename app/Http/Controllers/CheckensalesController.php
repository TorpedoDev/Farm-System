<?php

namespace App\Http\Controllers;

use App\DataTables\ChickensalesDataTable;
use App\Models\Chickensales;
use Illuminate\Http\Request;

class CheckensalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ChickensalesDataTable $datatable)
    {
        return $datatable->render('chicken-sales.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chicken-sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'weights' => 'required|numeric',
            'kilo_price' => 'required|numeric'
        ]);

        Chickensales::create([
            'weights' => $request->weights,
            'kilo_price' => $request->kilo_price,
            'total' => $request->weights * $request->kilo_price
        ]);

        return redirect()->back()->with('success' , __('hometr.Chicken has been saled successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chickensale = Chickensales::where('id' , $id)->first();
        return view('chicken-sales.show' , compact('chickensale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chickensale = Chickensales::where('id' , $id)->first();
        return view('chicken-sales.edit' , compact('chickensale'));
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
        $chickensale = Chickensales::where('id' , $id)->first();
        
        $request->validate([
            'weights' => 'required|numeric',
            'kilo_price' => 'required|numeric'
        ]);
 

        $chickensale->update([ 
        'weights' => $request->weights,
        'kilo_price' => $request->kilo_price,
        'total' => $request->weights * $request->kilo_price
    ]);

    return redirect()->back()->with('success' , __('hometr.Saled chicken has been edited successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chickensale = Chickensales::where('id' , $id)->first();
       $chickensale->delete();
       return redirect()->back()->with('success' , __('hometr.Saled chicken has been deleted successfully'));

    }
}
