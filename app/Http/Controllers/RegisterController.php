<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|unique:users,email|email:dns',
            'password' => 'required|min:8|confirmed',
        ], [
            'name.required' => 'Please fill your Name!',
            'name.max' => 'Name must be less than 255 characters!',
            'name.min' => 'Name must be more than 3 characters!',
            'email.required' => 'Please fill your Email!',
            'email.email' => 'Please fill your Email with valid email!',
            'email.unique' => 'Email already registered! Try Again!',
            'email.email:dns' => 'Email not valid! Try Again!',
            'password.required' => 'Please fill your Password!',
            'password.min' => 'Password must be more than 8 characters!',
            'password.confirmed' => 'Password not match! Try Again!',
        ]);

        $data = $request->only('name', 'email', 'password');
        // dd($data);

        try {
            User::insert([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('login.create')->with('flash',[
                'type' => 'success',
                'msg' => 'Register Success! Please Login!',
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('register.create')->with('flash',[
                'type' => 'danger',
                'msg' => 'Register Failed! Please Try Again!',
            ]);
        }

    }
}
