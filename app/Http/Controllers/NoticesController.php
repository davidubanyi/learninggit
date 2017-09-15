<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\FormRequest;
use App\Provider;


class NoticesController extends Controller
{
    //create a new notices instance

    // public function __construct()
    // {
    // 	$this->middleware('auth');
    // }

    public function index()
    {

    	return 'all notices';

    }

    public function create()

    {
    	//get the list of providers to send information to
    	$providers = Provider::pluck('name','id');
    	//load a view to create a new notice

    	return view('notices.create', compact('providers'));


    }

    public function confirm(Requests\PrepareNoticeRequest $request)

    {

    	return $request->all();
    }
}
