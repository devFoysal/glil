<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Http\Traits\ImageHandleTraits;
use App\Models\Retail;
use App\Models\RetailPlan;
use Illuminate\Http\Request;

class RetailController extends Controller
{

    use ImageHandleTraits;

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

    public function edit() {

        $retail = Retail::all();
        return view('backend.retail.edit',compact('retail'));
    }

    public function update(Request $request) {
        $retail = Retail::find(1);

          // Validation Data
          $request->validate([
            'banner_title_en'        => 'required',
            'banner_subtitle_en'        => 'required',
            'title_en'        => 'required',
            'description_en'        => 'required',
            'banner'           => 'sometimes|image|mimes:jpeg,jpg,png',
           
        ]);

        $retail->banner_title_en = $request->banner_title_en;
        $retail->banner_subtitle_en = $request->banner_subtitle_en;
        $retail->title_en = $request->title_en;
        $retail->description_en = $request->description_en;

        $retail->banner_title_bn = $request->banner_title_bn;
        $retail->banner_subtitle_bn = $request->banner_subtitle_bn;
        $retail->title_bn = $request->title_bn;
        $retail->description_bn = $request->description_bn;

        if ($request->file('banner')) {
            if (!empty($retail->banner)) {
                $this->deleteImage($retail->banner,'retail');
            }
            $retail->banner =    $this->uploadImage($request->file('banner'), 'uploads/retail/');
        }

        $retail->save();

        return redirect(route('retail.index'))->with('success', 'Retail Page  Updated  Successfully');

        

    }
}