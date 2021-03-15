<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('user.index');
    }

    public function registationForm()
    {
        return view('user.register');
    }
}
