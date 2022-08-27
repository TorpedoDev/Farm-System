<?php

namespace App\Http\Controllers;

use App\DataTables\AdditionalexpensesDataTable;
use App\Models\Additionalexpenses;
use Illuminate\Http\Request;

class AdditionalexpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdditionalexpensesDataTable $datatable)
    {
        return $datatable->render('additionalexpenses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('additionalexpenses.create');
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
            'name' => 'required|string',
            'salary' => 'required|numeric'
        ]);

        Additionalexpenses::create([
            'name' => $request->name,
            'salary' => $request->salary
        ]);

        return redirect()->back()->with('success' , __('hometr.Additional expenses has been added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Additionalexpenses  $additionalexpenses
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $additional = Additionalexpenses::where('id' , $id)->first();
        return view('additionalexpenses.show' , compact('additional'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Additionalexpenses  $additionalexpenses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $additional = Additionalexpenses::where('id' , $id)->first();
        return view('additionalexpenses.edit' , compact('additional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Additionalexpenses  $additionalexpenses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $additional = Additionalexpenses::where('id' , $id)->first();
        $request->validate([
            'name' => 'required|string',
            'salary' => 'required|numeric'
        ]);

        $additional->update([
            'name' => $request->name,
            'salary' => $request->salary
        ]);

        return redirect()->back()->with('success' , __('hometr.Additional expenses has been edited successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Additionalexpenses  $additionalexpenses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $additional = Additionalexpenses::where('id' , $id)->first();
        $additional->delete();
        return redirect()->back()->with('success' , __('hometr.Additional expenses has been deleted successfully'));
    }
}
