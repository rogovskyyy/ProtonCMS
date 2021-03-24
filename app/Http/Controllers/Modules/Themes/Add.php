<?php

namespace App\Http\Controllers\Modules\Themes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Carbon\Carbon;

class Add extends \App\Http\Controllers\Modules\Themes {

    public static function view(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request))
        {
            return view('admin_template.themes.add');
        }

        return redirect('/dashboard#posts');
    }

    public static function add(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            // Dodaj plik do katalogu
        }
        return redirect('/dashboard');
    } 
}