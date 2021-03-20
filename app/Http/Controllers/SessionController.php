<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller {

    public static function view(Request $request) {
        if($request->session()->has('user')) {
            return redirect('/dashboard');
        }
        return view('admin_template.login');
    }

    public static function has_session(Request $request) : bool {
        if($request->session()->has('user'))
            return true;
        else
            return false;
    }

    public static function login(Request $request) {
        $result = DB::select('select * from users where users.username = :username AND users.password = :password limit 1', [
            "username" => $request->input('username'),
            "password" => hash('sha256', "($$$!^$#Y!@RHDF!@$&FWQ)*&".$request->input('password'))
        ]);

        $result = json_decode(json_encode($result), true);

        if(count($result) > 0) {

            session([
                'user' => $request->input('username'),
                'key' => hash('sha256', "(*$)!(ID()AS)DK!@#".$request->input('username')."MMAS_!@)MD)AM"),
            ]);

            return redirect('/dashboard');
        }
        return redirect('/dashboard/login');
    }

    public static function logout(Request $request) {
        if($request->session()->has('user')) {
            $request->session()->forget(['user', 'key']);
            $request->session()->flush();
        }
        return redirect('/dashboard/login');
    }
}