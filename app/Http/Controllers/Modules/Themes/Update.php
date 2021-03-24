<?php

namespace App\Http\Controllers\Modules\Themes;

use Exception;
use     Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Update extends \App\Http\Controllers\Modules\Themes {

    public static function view(Request $request, $id) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
                // zwroc widok do katalogu
        }
        return redirect('/dashboard/login');
    }

    public static function update(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            // Zaktualizuj plik do katalogu
        }
        return redirect('/dashboard#menus');
    }
}