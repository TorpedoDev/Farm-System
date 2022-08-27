<?php

namespace App\Http\Controllers;

use App\DataTables\DeadchickenDataTable;
use App\Models\Deadchicken;
use Illuminate\Http\Request;

class DeadchickenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DeadchickenDataTable $datatable)
    {
        return $datatable->render('deadchicken.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deadchicken.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['number' => 'required|numeric']);
        Deadchicken::create(['number' => $request->number]);
        return redirect()->back()->with('success' , __('hometr.Dead chicken has been added successfully'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deadchicken  $deadchicken
     * @return \Illuminate\Http\Response
     */
    public function show(Deadchicken $deadchicken)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deadchicken  $deadchicken
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deadchicken = Deadchicken::where('id' , $id)->first();
        return view('deadchicken.edit' , compact('deadchicken'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deadchicken  $deadchicken
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $deadchicken = Deadchicken::where('id' , $id)->first();
        $request->validate(['number' => 'required|numeric']);
        $deadchicken->update(['number' => $request->number]);
        return redirect()->back()->with('success' , __('hometr.Dead chicken has been edited successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deadchicken  $deadchicken
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deadchicken = Deadchicken::where('id' , $id)->first();
        $deadchicken->delete();
        return redirect()->back()->with('success' , __('hometr.Dead chicken has been deleted successfully'));
    }
}
