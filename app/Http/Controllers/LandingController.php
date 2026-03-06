<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;   
use Illuminate\Http\Request;

class LandingController extends Controller                                                                      
{
    public function index()
    {
        return view('pages.landing.index');
    }
}
