<?php

namespace App\Http\Controllers\Backend\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StuffListController extends Controller
{
    public function index(){
        return view('backend.more.abuts.who-we-are');
    }
    public function addForm(){}
    public function store(){}
    public function edit($id){}
    public function update(Request $request){}
    public function delete($id){}
}