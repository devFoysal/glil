<?php

namespace App\Http\Controllers\Backend\Claims;

use App\Http\Controllers\Controller;
use App\Models\Claims\ClaimSubmission;
use Illuminate\Http\Request;

class ClaimSubmissionController extends Controller
{
    public function edit() {

        $claimSubmission = ClaimSubmission::find(1);       
        return view('backend.claims.claimSubmission.edit', compact('claimSubmission'));
    }

    public function update(Request $request) {
        $claimSubmission = ClaimSubmission::find(1);

          // Validation Data
          $request->validate([
            'name_en' => 'required', 
            'description_en'        => 'required',
           
        ]);

        $claimSubmission->name_en = $request->name_en;
        $claimSubmission->name_bn = $request->name_bn;
        $claimSubmission->description_en = $request->description_en;
        $claimSubmission->description_bn = $request->description_bn;
        $claimSubmission->save();

        return redirect(route('claims.claimSubmission.edit'))->with('success', 'claim Submission Updated  Successfully');


    }
}