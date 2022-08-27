<?php

namespace App\Http\Controllers;

use App\Models\Additionalexpenses;
use App\Models\Dock;
use App\Models\feed;
use App\Models\cartoon;
use App\Models\chicken;
use App\Models\eggsales;
use App\Models\medicine;
use App\Models\chickensales;
use App\Models\Deadchicken;
use App\Models\Worker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalmedicine = Medicine::select('salary')->get();
        $sum_medicine = $totalmedicine->sum('salary');

       $totalfeed = Feed::select('total')->get();
       $sum_feed = $totalfeed->sum('total');
      
       $totalcartoon = Cartoon::select('total')->get();
       $sum_cartoon = $totalcartoon->sum('total');

       $totalchickenin = Chicken::select('total')->get();
       $sum_chickenin = $totalchickenin->sum('total');

       $totaleggs = Eggsales::select('total')->get();
       $sum_egg = $totaleggs->sum('total');

       $totalchickenout = Chickensales::select('total')->get();
       $sum_chickenout = $totalchickenout->sum('total');

       $totaldock = Dock::select('total')->get();
       $sum_dock = $totaldock->sum('total');

       $totaldead = Deadchicken::select('number')->get();
       $sum_dead = $totaldead->sum('number');

       $totalworker = Worker::select('salary')->get();
       $sum_worker = $totalworker->sum('salary');

       $totaladditional = Additionalexpenses::select('salary')->get();
       $sum_additional = $totaladditional->sum('salary');

        return view('home' , compact('sum_medicine' , 'sum_feed' , 'sum_cartoon' , 'sum_chickenin' , 'sum_egg' , 'sum_chickenout' , 'sum_dock', 'sum_dead' , 'sum_worker' , 'sum_additional'));
    }
}
