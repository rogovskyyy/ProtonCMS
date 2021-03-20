<?php

namespace App\Http\Controllers\Modules\Menus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Delete extends \App\Http\Controllers\Modules\Menus {

    public static function delete(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            DB::delete('delete from menus where pathway = :path', [
                "path" => $request->input('pathway')
            ]);
        }
        return redirect('/dashboard');
    }
}