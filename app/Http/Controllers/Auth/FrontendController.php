<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use illuminate\Http\request;

class FrontendController extends Controller{
    public function index(){
        return view('front.layouts.frontend');
    }
}