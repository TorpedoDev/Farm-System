<?php

namespace App\Http\Controllers;

use App\DataTables\ChickenDataTable;
use App\Models\chicken;
use Illuminate\Http\Request;

class ChickenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ChickenDataTable $datatable)
    {
        return $datatable->render('inner-chicken.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inner-chicken.create');
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
            'quantity' => 'required|numeric',
            'salary' => 'required|numeric'
        ]);

        Chicken::create([
            'quantity' => $request->quantity,
            'salary' => $request->salary,
            'total' => $request->quantity * $request->salary       
        ]);

        return redirect()->back()->with('success' , __('hometr.Chicken have been added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chicken = Chicken::where('id' , $id)->first();
        return view('inner-chicken.show' , compact('chicken'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chicken = Chicken::where('id' , $id)->first();
        return view('inner-chicken.edit' , compact('chicken'));
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
        $chicken = Chicken::where('id' , $id)->first();
        $request->validate([
            'quantity' => 'required|numeric',
            'salary' => 'required|numeric'
        ]);

        $chicken->update([
            'quantity' => $request->quantity,
            'salary' => $request->salary,
            'total' => $request->quantity * $request->salary
        ]);
        
        return redirect()->back()->with('success', __('hometr.Inner chicken have been updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chicken = Chicken::where('id' , $id)->first();
        $chicken->delete();
        return redirect()->back()->with('success' , __('hometr.Inner chicken have been deleted successfully'));
    }
}
