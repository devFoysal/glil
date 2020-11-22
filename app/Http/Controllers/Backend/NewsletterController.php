<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function index(){
        $newsletter = Newsletter::first();
        return view('backend.more.newsletter.index', compact('newsletter'));
    }

    public function edit($id){
        $newsletter = Newsletter::findOrFail($id);
        return view('backend.more.newsletter.edit', compact('newsletter'));
    }
    public function update(Request $request){
        
        try {
            $newsletter = Newsletter::findOrFail($request->id);
            // dd($newsletter);
            if($request->has('newsletter_en')){
                unlink('uploads/newsletter/' . $newsletter->newsletter_en);
                $imageEn = $request->file('newsletter_en');
                $imageEnName = rand() . '.' . $imageEn->getClientOriginalExtension();
                $imageEn->move('uploads/newsletter/', $imageEnName);
                $newsletter->newsletter_en = $imageEnName;
            }
            if($request->has('newsletter_bn')){
                unlink('uploads/newsletter/' . $newsletter->newsletter_bn);
                $imageBn = $request->file('newsletter_bn');
                $imageBnName = rand() . '.' . $imageBn->getClientOriginalExtension();
                $imageBn->move('uploads/newsletter/', $imageBnName);
                $newsletter->newsletter_bn = $imageBnName;
            }
            $newsletter->update();
            return redirect()->route("newsletter.home")->with('success', 'Newsletter Successfully');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }
}
