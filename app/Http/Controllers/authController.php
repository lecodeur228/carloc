<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\resgisterRequest;

class authController extends Controller
{
    function login()
    {
        return view("auth.login");
    }

    function doLogin(loginRequest $request){

        if(Auth::attempt($request->only('email','password'))){

            return view('dashboard');
        }
    }

    function register()
    {
        return view("auth.register");
    }

    public function doRegister(resgisterRequest $request)
    {
       $user =User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'role_id' => 1
       ]);

        return redirect()->back()->with('success', 'Utilisateur créer avec success');
    }

    public function logout()
    {
        Auth::logout();
        return view("auth.login");
    }
}
