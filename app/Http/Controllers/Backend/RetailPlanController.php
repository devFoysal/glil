<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Http\Traits\ImageHandleTraits;
use App\Http\Traits\ResponseTrait;
use App\Models\RetailPlan;
use Illuminate\Http\Request;

class RetailPlanController extends Controller
{
        use ResponseTrait;
        use ImageHandleTraits;
        public function create() {

            return view('backend.retail.plan.index');
        }

        public function store(Request $request) {

    // Validation Data
        $request->validate([
            'name_en'        => 'required',
            'banner'           => 'required|image|mimes:jpeg,jpg,png',
           
        ]);

        
        $plan = new RetailPlan();
        $plan->name_en = $request->name_en;
        $plan->name_bn = $request->name_bn;
        $plan->banner = $this->uploadImage($request->banner,'uploads/');
        if($plan->save()) {
            return redirect(route('retail.index'))->with('success', 'Retail Plan Created Successfully');
        } 
          
    }

    public function edit($id) {
        $retailPlan = RetailPlan::find($id);       
        return view('backend.retail.plan.edit', compact('retailPlan'));
    }


    public function update(Request $request)
    {
        // Create New User
        $retailPlan = RetailPlan::find($request->id);

        // Validation Data
        $request->validate([
            'name_en'        => 'required',
            'banner'           => 'sometimes|image|mimes:jpeg,jpg,png',
           
        ]);

        $retailPlan->name_en = $request->name_en;
        $retailPlan->name_bn = $request->name_bn;

        if ($request->file('banner')) {
            if (!empty($retailPlan->banner)) {
                $this->deleteImage($retailPlan->banner);
            }
            $retailPlan->banner =    $this->uploadImage($request->file('banner'), 'uploads/');
        }

        $retailPlan->save();

        return redirect(route('retail.index'))->with('success', 'Retail Plan Updated  Successfully');
    }

    public function destroy ($id)
        {
            $plan = RetailPlan::find($id);

            if(!empty($plan->banner)) {
                $this->deleteImage($plan->banner, 'uplaods/');
                
            }

            if($plan->delete()){
                return redirect()->back()->with('success', 'Reatil Plan Deleted Successfully.');
            }
         
        }
}