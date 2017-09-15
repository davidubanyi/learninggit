<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //this handles the pages on the web app

    public function home ()
    {
    	//returns view of the page
    
    	return view('pages.home');
    }
}
