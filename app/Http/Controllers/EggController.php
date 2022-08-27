<?php

namespace App\Http\Controllers;

use App\DataTables\EggDataTable;
use App\Models\eggsales;
use Illuminate\Http\Request;

class EggController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EggDataTable $datatable)
    {
        return $datatable->render('eggs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eggs.create');
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

        Eggsales::create([
            'quantity' => $request->quantity,
            'salary' => $request->salary,
            'total' => $request->quantity * $request->salary
        ]);

        return redirect()->back()->with('success' , __('hometr.Egg has been saled successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $egg = Eggsales::where('id' , $id)->first();
        return view('eggs.show' , compact('egg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $egg = Eggsales::where('id' , $id)->first();
        return view('eggs.edit' , compact('egg'));
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
        
        $egg = Eggsales::where('id' , $id)->first();
        $request->validate([
            'quantity' => 'required|numeric',
            'salary' => 'required|numeric'
        ]);

        $egg->update([ 
        'quantity' => $request->quantity,
        'salary' => $request->salary,
        'total' => $request->quantity * $request->salary
    ]);

    return redirect()->back()->with('success' , __('hometr.Egg has been edited successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $egg = Eggsales::where('id' , $id)->first();
         $egg->delete();
         
    return redirect()->back()->with('success' , __('hometr.Egg has been deleted successfully'));
    }
}
