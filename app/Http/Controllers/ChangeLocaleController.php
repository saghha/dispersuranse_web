<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelLocalization;

class ChangeLocaleController extends Controller
{
    
	public function changeLanguage(Request $request){
		$locale = $request->path();
		LaravelLocalization::setLocale($locale);
		return redirect()->back();
	}
}
