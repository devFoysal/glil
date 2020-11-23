<?php

namespace App\Http\Controllers;

use App\Models\RetailPlan;
use Illuminate\Http\Request;

class HomeFrontController extends Controller
{
    public function index() {
       
        $retailPlans = RetailPlan::all();
        return view("pages.home.index",compact('retailPlans'));
    }
}