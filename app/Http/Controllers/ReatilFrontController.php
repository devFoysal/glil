<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReatilFrontController extends Controller
{
    public  function showPlan($plan) {
        
       return view("pages.retailSinglePage.index");
    }
}