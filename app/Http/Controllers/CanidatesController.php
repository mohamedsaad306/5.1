<?php

namespace MYCLANBLOG\Http\Controllers;


use Request;

use MYCLANBLOG\Http\Requests;
use MYCLANBLOG\Http\Controllers\Controller;
use Image;
use Illuminate\Support\Facades\Input;
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

	$_FILES[0]=	Input::get('photo');

	if (Input::hasFile('photo')){
//
//		$file =Input::get('photo');

	$images= Image::make(Input::get('photo')->getRealPath());
	$c1=Canidates::create($input);

	$c1->image = $images->encode('jpg', 80);
	$c1->save();
	}

	return $_FILES;
}

public function view(){

	$registered_canidates=Canidates::all();

	// return $canidat;
	
	return view('canidates.viewcanidates',compact('registered_canidates'));
}


}   #class ends here ^_^ 
