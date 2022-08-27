<?php

namespace App\Http\Controllers;

use App\DataTables\WorkerDataTable;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WorkerDataTable $datatable)
    {
        return $datatable->render('worker.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('worker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['salary' => 'required|numeric']);
        Worker::create([
            'salary' => $request->salary
        ]);

        return redirect()->back()->with('success' , __('hometr.worker salary has been added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $worker = Worker::where('id' , $id)->first();
    
        return view('worker.show' , compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $worker = Worker::where('id' , $id)->first();
        return view('worker.edit' , compact('worker'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $worker = Worker::where('id' , $id)->first();
        $request->validate(['salary' => 'required|numeric']);
        $worker->update([
            'salary' => $request->salary
        ]);

        return redirect()->back()->with('success' , __('hometr.worker salary has been edited successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worker = Worker::where('id' , $id)->first();
        $worker->delete();
        return redirect()->back()->with('success' , __('hometr.worker salary has been deleted successfully'));
    }
}
