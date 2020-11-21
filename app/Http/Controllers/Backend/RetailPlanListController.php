<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Http\Traits\ImageHandleTraits;
use App\Models\RetailPlanList;
use App\Models\RetailPlan;
use Illuminate\Http\Request;
use Str;

class RetailPlanListController extends Controller
{
    use ImageHandleTraits;
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
    public function index($planId)
    {   $planId = RetailPlan::findOrFail($planId)->id; 
        $retailPlanLists = RetailPlanList::where('plan_id',$planId)->orderBy('id','desc')->get();
        return view('backend.retail.planlist.index',compact('retailPlanLists','planId'));
    }

    public function create($planId) {

        $plan = RetailPlan::findOrFail($planId); 
        return view('backend.retail.planlist.create',compact('plan'));
    }

    public function store(Request $request,$planId) {
        $planId = RetailPlan::findOrFail($planId)->id; 
          // Validation Data
          $request->validate([
            'name_en'        => 'required|unique:retail_plan_lists,name_en',
            'banner_title_en'        => 'required',
            'banner'           => 'required|image|mimes:jpeg,jpg,png',
            'image'           => 'required|image|mimes:jpeg,jpg,png',
           
        ]);


        $planList = new RetailPlanList;
        $planList->plan_id = $planId;
        $planList->image = $this->uploadImage($request->image,'uploads/retail/');
        $planList->banner = $this->uploadImage($request->banner,'uploads/retail/');
        $planList->video_url = $request->video_url;

        $planList->slug = Str::slug($request->name_en, '-');

        $planList->name_en = $request->name_en;
        $planList->banner_title_en = $request->banner_title_en;
        $planList->introduction_en = $request->introduction_en;
        $planList->feature_en = $request->feature_en;
        $planList->term_en = $request->term_en;
        $planList->key_1_en = $request->key_1_en;
        $planList->key_2_en = $request->key_2_en;
        $planList->key_3_en = $request->key_3_en;
        $planList->key_4_en = $request->key_4_en;


        $planList->name_bn = $request->name_bn;
        $planList->banner_title_bn = $request->banner_title_bn;
        $planList->introduction_bn = $request->introduction_bn;
        $planList->feature_bn = $request->feature_bn;
        $planList->term_bn = $request->term_bn;
        $planList->key_1_bn = $request->key_1_bn;
        $planList->key_2_bn = $request->key_2_bn;
        $planList->key_3_bn = $request->key_3_bn;
        $planList->key_4_bn = $request->key_4_bn;


        if($planList->save()) {
            return redirect(route('retail.planlist.index',['planId'=>$planId]))->with('success', 'Retail Plan  List Created Successfully');
        } 

    }

    public function edit($planListId) {

        $planList = RetailPlanList::findOrFail($planListId);

        return view('backend.retail.planlist.edit', compact('planList'));
    }

    public function update(Request $request,$id) {

        $planList = RetailPlanList::find($id);

        $request->validate([
            'name_en'        => 'required|unique:retail_plan_lists,name_en,'.$planList->id,
            'banner_title_en'        => 'required',
            'banner'           => 'sometimes|image|mimes:jpeg,jpg,png',
            'image'           => 'sometimes|image|mimes:jpeg,jpg,png',
           
        ]);

        if ($request->file('banner')) {
            if (!empty($planList->banner)) {
                $this->deleteImage($planList->banner, 'retail');
            }
            $planList->banner =    $this->uploadImage($request->banner,'uploads/retail/');
        }

        if ($request->file('image')) {
            if (!empty($planList->image)) {
                $this->deleteImage($planList->image, 'retail');
            }
            $planList->image =    $this->uploadImage($request->image,'uploads/retail/');
        }

        $planList->video_url = $request->video_url;

        $planList->slug = Str::slug($request->name_en, '-');

        $planList->name_en = $request->name_en;
        $planList->banner_title_en = $request->banner_title_en;
        $planList->introduction_en = $request->introduction_en;
        $planList->feature_en = $request->feature_en;
        $planList->term_en = $request->term_en;
        $planList->key_1_en = $request->key_1_en;
        $planList->key_2_en = $request->key_2_en;
        $planList->key_3_en = $request->key_3_en;
        $planList->key_4_en = $request->key_4_en;


        $planList->name_bn = $request->name_bn;
        $planList->banner_title_bn = $request->banner_title_bn;
        $planList->introduction_bn = $request->introduction_bn;
        $planList->feature_bn = $request->feature_bn;
        $planList->term_bn = $request->term_bn;
        $planList->key_1_bn = $request->key_1_bn;
        $planList->key_2_bn = $request->key_2_bn;
        $planList->key_3_bn = $request->key_3_bn;
        $planList->key_4_bn = $request->key_4_bn;


        if($planList->save()) {
            return redirect(route('retail.planlist.index',['planId'=> $planList->plan_id]))->with('success', 'Retail Plan  List Updated Successfully');
        } 

    }

}