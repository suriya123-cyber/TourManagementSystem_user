<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function destination()
     {
          return view('user.destination');
     }
     public function contact()
     {
          return view('user.contact');
     }
     public function travel()
     {
          return view('');
     }
     public function pricing()
     {
          return view('user.pricing');
     }
}