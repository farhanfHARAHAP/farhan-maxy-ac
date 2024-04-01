<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
     public function register(Request $request)
    {
        try{
            $account = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users', // Ensure unique email
                'password' => 'required|string|min:8',
            ]);
            $account['password'] = Hash::make($account['password']);
        } catch (ValidationException $e) {
            return view('register',[
                'error' => 'You failed to fill the form correctly OR your email has been registered!'
            ]);
        }

        User::create($account);

        // Handle user registration (e.g., login or redirect)

        return view('register',[
            'success' => 'Account successfully created!'
        ]);
    }
}
