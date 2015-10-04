<?php

namespace MYCLANBLOG\Http\Controllers;


use Request;

use MYCLANBLOG\Http\Requests;
use MYCLANBLOG\Http\Controllers\Controller;

use MYCLANBLOG\Canidates;


class CanidatesController extends Controller
{
    //
	public function index(){

	//	$canidate=Canidates::all();
	//	return $canidate;
	return view('masterlayout');

	}

	public function create(){
		return view('canidates.newcanidate');
	}


public function store(){

	$input=Request::all();

	Canidates::create($input);

	return $input;
}

public function view(){

	$registered_canidates=Canidates::all();
	// return $canidat;
	
	return view('canidates.viewcanidates',compact('registered_canidates'));
}


}   #class ends here ^_^ 
