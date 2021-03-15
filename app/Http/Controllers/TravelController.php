<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function asia(){
        return view('user.travel.asia');
    }
    public function america()
    {
        return view('user.travel.america');
    }
    public function europe()
    {
        return view('user.travel.europe');
    }
    public function canada()
    {
        return view('user.travel.canada');
    }


}

