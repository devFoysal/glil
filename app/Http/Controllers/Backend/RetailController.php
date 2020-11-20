<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Retail;
use App\Models\RetailPlan;
use Illuminate\Http\Request;

class RetailController extends Controller
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
        $retailPlans = RetailPlan::orderBy('id','desc')->get();
        return view('backend.retail.index',compact('retailPlans'));
    }
}