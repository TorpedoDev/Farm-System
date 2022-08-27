<?php

namespace App\Http\Controllers;

use App\DataTables\DockDataTable;
use App\Models\Dock;
use Illuminate\Http\Request;

class DockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DockDataTable $datatable)
    {
        return $datatable->render('dock.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dock.create');
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

        Dock::create([
            'quantity' => $request->quantity,
            'salary' => $request->salary,
            'total' => $request->quantity * $request->salary
        ]);

        return redirect()->back()->with('success' , __('hometr.Dock has been bought successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dock  $dock
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dock = Dock::where('id' , $id)->first();
        return view('dock.show' , compact('dock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dock  $dock
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dock = Dock::where('id' , $id)->first();
        return view('dock.edit' , compact('dock'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dock  $dock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dock = Dock::where('id' , $id)->first();
        $request->validate([
            'quantity' => 'required|numeric',
            'salary' => 'required|numeric'
        ]);

        $dock->update([
            'quantity' => $request->quantity,
            'salary' => $request->salary,
            'total' => $request->quantity * $request->salary
        ]);

        return redirect()->back()->with('success' , __('hometr.Dock has been edited successfully'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dock  $dock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dock = Dock::where('id' , $id)->first();

        $dock->delete();
        return redirect()->back()->with('success' , __('hometr.Dock has been deleted successfully'));
    }
}
