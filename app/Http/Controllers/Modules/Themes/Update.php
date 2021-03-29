<?php

namespace App\Http\Controllers\Modules\Themes;

use Exception;
use     Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Update extends \App\Http\Controllers\Modules\Themes {

    public static function view(Request $request, $catalog, $filename) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
                $result = DB::select('select * from themes where themes.catalog = :catalog AND themes.filename = :filename', [
                    "catalog" => $catalog,
                    "filename" => $filename
                ]);
                if(count($result) == 1) {
                    return view('admin_template.themes.update', [
                        "catalog" => $result[0]->catalog,
                        "filename" => $result[0]->filename,
                        "content" => $result[0]->content,
                    ]);
                }
        }
        return redirect('/dashboard/login');
    }

    public static function update(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            $result = DB::update('update themes set themes.content = :content where themes.catalog = :catalog AND themes.filename = :filename', [
                "content" => $request->input('_content'),
                "catalog" => $request->input('_catalog'),
                "filename" => $request->input('_filename'),
            ]);
        }
        return redirect('/dashboard#menus');
    }
}