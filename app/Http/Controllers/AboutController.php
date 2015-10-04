<?php

namespace MYCLANBLOG\Http\Controllers;

use Illuminate\Http\Request;

use MYCLANBLOG\Http\Requests;
use MYCLANBLOG\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    //
	    public function create()
    {
        return "hello this is create";
      
    }

        public function dosmt()
    {
        return "hello this is do something";


    }

public function sayhello($name){
     $data['name'] = $name;
    return view('helloview',$data);
}

}
