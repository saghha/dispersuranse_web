<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){
    	return view('home.ico_disper');
    }

    public function subscribe(Request $request){
    	if (request()->ajax()) {
    		$email = $request->email;
    		$name = $request->name;
    		\Newsletter::subscribe($email, ['FNAME'=> $name]);
    		return response()->json(['success' => 'success', 200]);
    	}
    }
}
