<?php

namespace App\Http\Controllers\Modules\Themes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Delete extends \App\Http\Controllers\Modules\Themes {

    public static function delete(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
                DB::delete('delete from themes where themes.catalog = :catalog AND themes.filename = :filename', [
                    "catalog" => $request->input('_catalog'),
                    "filename" => $request->input('_filename')
                ]);
        }
        return redirect('/dashboard#themes');
    }
}