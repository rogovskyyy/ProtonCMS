<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller 
{
    public function isLogged(Request $request) {
        if($request->session()->has('admin_logged')) {
            return view('admin.index');
        }
        return view('admin.login');
    }

    public function login(Request $request) {
        if($request->input('username') == "admin" && $request->input('password') == "123") {
            $request->session()->put('admin_logged', 1);
            return redirect('/admin');
        }
        return redirect('/admin');
    }

    public function logout(Request $request) {
        if($request->session()->has('admin_logged')) {
            $request->session()->flush();
            return redirect('/admin');
        }
    }
}