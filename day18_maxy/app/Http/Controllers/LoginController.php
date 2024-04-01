<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\AuthenticationException;

class LoginController extends Controller
{
    public function login(Request $request){
        try{
            $account = $request->validate([
                'email' => 'required|string|email', // Ensure unique email
                'password' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            return view('login',[
                'error' => 'You failed to fill the form correctly OR your email has been registered!'
            ]);
        }

        $attempt = Auth::attempt($account);
        if($attempt != 1){
            return view('login',[
                'error', 'Your Email or Password or Both is wrong :|'
            ]);
        }
        if($attempt){
            return redirect('/admin/home');
        }
    }

    public function logout()
    {
        Auth::logout();

        // Optional: Redirect to a specific location after logout
        return redirect('/login'); // Or your desired route
    }
}
