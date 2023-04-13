<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("user/login");
    }
    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => "email wajib diisi",
            'password.required' => "password wajib diisi"
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'admin'
        ];
        if (Auth::attempt($infologin)) {
            return redirect('/admin');
        } else {
            $infologin = [
                'email' => $request->email,
                'password' => $request->password,
                'role' => 'user'
            ];
            if (Auth::attempt($infologin)) {
                return redirect('/');
            } else {
                return redirect('/login');
            }
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    function register()
    {
        return view('user/register');
    }
    function create(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('no_wa', $request->no_wa);
        Session::flash('email', $request->email);
        $request->validate([
            'nama' => 'required',
            'no_wa' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'password_verified' => 'required|same:password'
        ], [
            'email.unique' => 'Email sudah terdafatar'
        ]);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'no_wa' => $request->no_wa,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect('/login');
        } else {
            return redirect('/register');
        }
    }
}
