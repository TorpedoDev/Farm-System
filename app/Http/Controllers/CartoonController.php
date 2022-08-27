<?php

namespace App\Http\Controllers;

use App\DataTables\CartoonDataTable;
use App\Models\cartoon;
use Illuminate\Http\Request;

class CartoonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CartoonDataTable $datatable)
    {
        return $datatable->render('cartoon.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('cartoon.create');
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
            'salary' => 'required|numeric',
        ]);

        Cartoon::create([
            'quantity' => $request->quantity,
            'salary' => $request->salary,
            'total' => $request->quantity * $request->salary
        ]);

        return redirect()->back()->with('success' , __('hometr.Cartoon has been bought successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cartoon = Cartoon::where('id' , $id)->first();
        return view('cartoon.show' , compact('cartoon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cartoon = Cartoon::where('id' , $id)->first();
        return view('cartoon.edit' , compact('cartoon'));
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
        $cartoon = Cartoon::where('id' , $id)->first();
        $request->validate([
            'quantity' => 'required|numeric',
            'salary' => 'required|numeric',
        ]);

        $cartoon->update([
            'quantity' => $request->quantity,
            'salary' => $request->salary,
            'total' => $request->quantity * $request->salary
        ]);
        return redirect()->back()->with('success' , __('hometr.Cartoon has been edited successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cartoon = Cartoon::where('id' , $id)->first();
        $cartoon->delete();
        return redirect()->back()->with('success' , __('hometr.Cartoon has been deleted successfully'));

    }
}
