<?php

namespace App\Http\Controllers;

use App\Models\RetailPlan;
use App\Models\RetailPlanList;
use Illuminate\Http\Request;

class ReatilFrontController extends Controller
{
    public  function showPlan($locale,$plan) {

        $plan = RetailPlan::where('slug',trim($plan))->get();
        if($plan->count()>0){
            $planLists = RetailPlanList::where('plan_id',$plan[0]->id)->get(['id','name_en','name_bn','image','slug']);
            
            return view("pages.retailSinglePage.index",compact('plan','planLists'));
        }else {

            return redirect(route('homepage',['language'=>$locale]));
        }
        
       
    }

    public  function showPlanList($locale,$plan,$list) {

        $planList = RetailPlanList::where('slug',$list)->first();
        return view("pages.retailPlanList.index",compact('planList'));
        
       
    }
}