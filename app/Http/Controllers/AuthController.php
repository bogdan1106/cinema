<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function index()
    {
        return view('register.index');
    }


    public function register(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'password' => 'required',
            'email' =>'required| unique:users',
        ]);

        User::create($request);
        return back();
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            if(Auth::user()->is_verify == 0)
            {
                Auth::logout();
                return redirect('/')->with('status', 'confirm your email adress');
            }
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_verify' => 1]))
        {
            return redirect('/');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


    public function verify($token)
    {
        $user = User::where('verify_token', $token)->firstOrFail();

        if ($user->verify_token == $token)
        {
            $user->is_verify = 1;
            $user->save();
        }

        return redirect('/');
    }
}
