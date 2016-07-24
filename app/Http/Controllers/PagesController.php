<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    
    public function home(){

    	$people = ["Jon", "Kahleesi", "Ned"];
    
		return view('welcome', compact('people'));
    	
    }

    public function about(){

    	return view('about');
    	
    }


}
