<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Corporate;
use App\Models\CorporateAccordion;
use Carbon\Carbon;

class CorporateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        $corporate = Corporate::find(1);
        $corporateaccordions = CorporateAccordion::all();
        return view('backend.corporate.index', compact('corporate', 'corporateaccordions'));
    }

    public function edit ($id)
    {
        $corporate = Corporate::find(1);
        return view('backend.corporate.edit', compact('corporate'));
    }

    public function update (Request $request)
    {
        try {
            $corporate = Corporate::findOrFail($request->id);

            if($request->has('image')){
                unlink('uploads/corporate/' . $corporate->image);
                $image =$request->file('image');
                $name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/corporate/', $name);
                $corporate->image = $name;
            }

            $corporate->title_en = $request->title_en;
            $corporate->title_bn = $request->title_bn;
            $corporate->subtitle_en = $request->subtitle_en;
            $corporate->subtitle_bn = $request->subtitle_bn;
            $corporate->intoduction_en = $request->intoduction_en;
            $corporate->intoduction_bn = $request->intoduction_bn;
            $corporate->whyguardian_en = $request->whyguardian_en;
            $corporate->whyguardian_bn = $request->whyguardian_bn;
            $corporate->benefit_en = $request->benefit_en;
            $corporate->benefit_bn = $request->benefit_bn;
            $corporate->grouptermlife_en = $request->grouptermlife_en;
            $corporate->grouptermlife_bn = $request->grouptermlife_bn;
            $corporate->illnessbenefits_en = $request->illnessbenefits_en;
            $corporate->illnessbenefits_bn = $request->illnessbenefits_bn;
            $corporate->medicalinsuranceplan_en = $request->medicalinsuranceplan_en;
            $corporate->medicalinsuranceplan_bn = $request->medicalinsuranceplan_bn;
            $corporate->accidentbenefits_en = $request->accidentbenefits_en;
            $corporate->accidentbenefits_bn = $request->accidentbenefits_bn;
            $corporate->updated_at = Carbon::now();
            $corporate->update();

            return redirect()->route("corporate.index")->with('success', 'Corporate Page Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function createaccordion ()
    {
        return view('backend.corporate.accordion.create');
    }

    public function storeaccordion (Request $request)
    {
        try {
            $corporateaccordion = new CorporateAccordion;

            $corporateaccordion->title_en = $request->title_en;
            $corporateaccordion->title_bn = $request->title_bn;
            $corporateaccordion->description_en = $request->description_en;
            $corporateaccordion->description_bn = $request->description_bn;
            $corporateaccordion->page_link = $request->page_link;
            $corporateaccordion->created_at = Carbon::now();

            $corporateaccordion->save();
            return redirect()->route("corporate.index")->with('success', 'Corporate Accordion Created Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function editaccordion ($id) 
    {
        $corporateaccordion = CorporateAccordion::find($id);
        return view('backend.corporate.accordion.edit', compact('corporateaccordion'));
    }

    public function updateaccordion (Request $request) 
    {
        try {
            $corporateaccordion = CorporateAccordion::findOrFail($request->id);

            $corporateaccordion->page_link = $request->page_link;
            $corporateaccordion->title_en = $request->title_en;
            $corporateaccordion->title_bn = $request->title_bn;
            $corporateaccordion->description_en = $request->description_en;
            $corporateaccordion->description_bn = $request->description_bn;
            $corporateaccordion->updated_at = Carbon::now();
            $corporateaccordion->update();

            return redirect()->route("corporate.index")->with('success', 'Corporate Accordion Updated Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function destroyaccordion ($id) 
    {
        try {
            $blog = CorporateAccordion::find($id);
            $blog->delete();
            return redirect()->route("corporate.index")->with('success', 'Corporate Accordion Deleted Successfully.');
        } catch (\Throwable $th) {
            return redirect()->route("corporate.index")->withError($th->getMessage())->withInput();
        }
    }
}
