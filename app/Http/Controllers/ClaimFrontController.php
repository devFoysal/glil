<?php

namespace App\Http\Controllers;

use App\Models\Claims\Claim;
use App\Models\Claims\ClaimSubmission;
use App\Models\Claims\OverView;
use Illuminate\Http\Request;

class ClaimFrontController extends Controller
{
    public function index() {

        $claim = Claim::first();
        $overview = OverView::first();
        $claimSubmission = ClaimSubmission::first();
        return view("pages.claims.index",compact(['claim','overview','claimSubmission']));
    }
}