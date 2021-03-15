<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller {

    public static function view_login(Request $request) {
        if($request->session()->has('user')) {
            return redirect('/pcms-admin');
        }
        return view('admin_template.paths.login');
    }

    public static function action_login(Request $request) {
        $result = DB::select('select * from users where users.username = :username AND users.password = :password limit 1', [
            "username" => $request->input('username'),
            "password" => hash('sha256', "($$$!^$#Y!@RHDF!@$&FWQ)*&".$request->input('password'))
        ]);

        $result = json_decode(json_encode($result), true);

        if(count($result) > 0) {

            session([
                'user' => $request->input('username'),
                'key' => hash('sha256', "(*$)!(ID()AS)DK!@#".$request->input('username')."MMAS_!@)MD)AM"),
                'group' => $result[0]["groups"]
            ]);

            return redirect('/pcms-admin');
        }
        return redirect('/pcms-admin/login');
    }

    public static function action_logout(Request $request) {
        if($request->session()->has('user')) {
            $request->session()->forget(['user', 'key', 'group']);
            $request->session()->flush();
        }
        return redirect('/pcms-admin/login');
    }
}