<?php

namespace App\Http\Controllers;

use App\DataTables\FeedDataTable;
use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FeedDataTable $datatable)
    {
        return $datatable->render('feed.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feed.create');
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

        Feed::create([
            'quantity' => $request->quantity,
            'salary' => $request->salary,
            'total' => $request->quantity * $request->salary
        ]);

        return redirect()->back()->with('success' , __('hometr.Feed has been bought successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feed = Feed::where('id' , $id)->first();
        return view('feed.show' , compact('feed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feed = Feed::where('id' , $id)->first();
        return view('feed.edit' , compact('feed'));
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
        $feed = Feed::where('id' , $id)->first();
        $request->validate([
            'quantity' => 'required|numeric',
            'salary' => 'required|numeric'
        ]);
        $feed->update([
            'quantity' => $request->quantity,
            'salary' => $request->salary,
            'total' => $request->quantity * $request->salary
        ]);

        return redirect()->back()->with('success' , __('hometr.Feed has been edited successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feed = Feed::where('id' , $id)->first();
       $feed->delete();
       return redirect()->back()->with('success' , __('hometr.Feed has been deleted successfully'));
    }
}
