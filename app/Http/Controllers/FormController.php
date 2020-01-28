<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //index

    public function index(){
        
        
        return view('template.test-form');
    }

    
}
