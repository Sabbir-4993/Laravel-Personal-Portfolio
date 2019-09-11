<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontConteoller extends Controller
{
    public function index(){
        return view ('frontview.home.homecontent');
    }

    public function blog(){
        return view ('frontview.home.blogcontent');
    }
    
}
