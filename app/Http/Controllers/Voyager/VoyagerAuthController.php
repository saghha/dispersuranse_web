<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerAuthController as BaseVoyagerAuthController;
use TCG\Voyager\Facades\Voyager;
use Auth;

class VoyagerAuthController extends BaseVoyagerAuthController
{
    
    public function login()
    {
        if (Auth::user()) {
            return redirect()->route('home');
        }

        return Voyager::view('voyager::login');
    }
}
