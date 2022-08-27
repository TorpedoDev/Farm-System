<?php

namespace App\Http\Controllers;

use App\DataTables\MedicineDataTable;
use App\Models\medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MedicineDataTable $datatable)
    {
        return $datatable->render('medicine.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicine.create');
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

        Medicine::create([
            'name' => $request->name,
            'salary' => $request->salary,
        ]);

        return redirect()->back()->with('success' , __('hometr.Medicine has been bought successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicine = Medicine::where('id' , $id)->first();
        return view('medicine.show' , compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine = Medicine::where('id' , $id)->first();
        return view('medicine.edit' , compact('medicine'));
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
        $medicine = Medicine::where('id' , $id)->first();
        $request->validate([
            'name' => 'required|string',
            'salary' => 'required|numeric'
        ]);

        $medicine->update([
            'name' => $request->name,
            'salary' => $request->salary
        ]);
        return redirect()->back()->with('success' , __('hometr.Medicine has been edited successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine = Medicine::where('id' , $id)->first();
       $medicine->delete();
       return redirect()->back()->with('success' , __('hometr.Medicine has been deleted successfully'));
    }
}
