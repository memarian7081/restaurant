<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(){
        return view('authenticate.register');
    }
    public function authenticate(StoreUserRequest $request){
        $validated = $request->validated();
        User::create([
            'name' =>$validated['name'],
            'email' =>$validated['email'],
            'password' => Hash::make($validated['password']),
            'userName' =>$validated['userName'],
            'phone' =>$validated['phone'],
            'remember_token' =>Str::random(30),
        ]);
        return redirect()->route('home');
    }
    public function login()
    {
        return view('authenticate.login');
    }
    public function storeLogin(Request $request){
       $validated =$request->validate([
           'userName' => 'required',
           'password' => 'required',
       ]);
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
