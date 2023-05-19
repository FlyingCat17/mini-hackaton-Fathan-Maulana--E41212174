<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        $check_user = User::count();
        // dd($check_user);
        if ($check_user < 1) {
            return redirect()->route('register.create')->with('flash', [
                'type' => 'warning',
                'msg' => 'Please Register First!',
            ]);
        };
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|email:dns',
            'password' => 'required',
        ], [
            'email.required' => 'Please fill your Email!',
            'email.email' => 'Please fill your Email with valid email!',
            'email.email:dns' => 'Email not valid! Try Again!',
            'password.required' => 'Please fill your Password!',
        ]);

        $data = $request->only('email', 'password');
        try {
            $check_is_available = User::where('email', $data['email'])->first();
            if ($check_is_available) {
                if (password_verify($data['password'], $check_is_available->password)) {
                    // Session::put('user', $check_is_available);
                    // return redirect()->route('dashboard.index')->with('flash',[
                    //     'type' => 'success',
                    //     'msg' => 'Login Success!',
                    // ]);
                    Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
                    return redirect()->route('dashboard.index');
                } else {
                    return redirect()->route('login.create')->with('flash', [
                        'type' => 'danger',
                        'msg' => 'Email or Password is wrong! Please try again!',
                        'value' => $data['email'],
                    ]);
                }
            } else {
                return redirect()->route('login.create')->with('flash', [
                    'type' => 'danger',
                    'msg' => 'Email or Password is wrong! Please try again!',
                    'value' => $data['email'],
                ]);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login.create')->with('flash', [
            'type' => 'success',
            'msg' => 'Logout Success!',
        ]);
    }

    public function abort()
    {
        abort(404);
    }
}
