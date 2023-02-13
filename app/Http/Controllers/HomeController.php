<?php

namespace App\Http\Controllers;
use App\Models\Allocation;
use App\Models\Faculty;
use App\Models\Payment;
use App\Models\Backend\Project;

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
        $allocat=Allocation::count();
        $pay=Payment::where('status', 0)->count();
        $faculty=Faculty::count();
        $field=Project::count();

        return view('backend.dashboard',compact('allocat','pay','faculty','field'));
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function registerHome()
    {
        return view('registerDashboard');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function accountHome()
    {
        return view('accountDashboard');
    }
 
   
  
}
