<?php

namespace App\Http\Controllers\Modules\Themes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Delete extends \App\Http\Controllers\Modules\Themes {

    public static function delete(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
                // Usuń plik z katalogu
        }
        return redirect('/dashboard');
    }
}