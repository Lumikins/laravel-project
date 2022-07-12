<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  // show login form
  public function login(){
    return view('users.login');
  }

  // user authentication
  public function authenticate(Request $request){
    $formFields = $request->validate([
    'email' => ['required', 'email'],
    'password' => 'required'
    ]);

    if(Auth::attempt($formFields)) {
      $request->session()->regenerate();
      return redirect('/')->with('message', 'Logged in successfully');
    }
    return back()->withErrors(['email'=>'Invalid credentials'])->onlyInput('email');
  }
    
  // logout user
  public function logout(Request $request){
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/')->with('message', 'User logged out');
  }
}
