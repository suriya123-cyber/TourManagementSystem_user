<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use App\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function registrationForm()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'country' => 'required',
            'password' => 'required',
        ]);

        $data = $request->all();

        $user = new User;
        $user->name =  $data['name'];
        $user->phone = $data['phone'];
        $user->country = $data['country'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->user_type = 'user';


        if ($user->save()) {

            return redirect()->route('login');
        }

        return redirect()->route('registration.form');
    }
}
