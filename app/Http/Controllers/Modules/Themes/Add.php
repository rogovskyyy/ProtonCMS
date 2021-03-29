<?php

namespace App\Http\Controllers\Modules\Themes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Carbon\Carbon;
use \App\Http\Controllers\Modules\Themes;

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
            DB::insert('insert into themes(themes.catalog, themes.filename, themes.content) values(:catalog, :filename, :content)', [
                "catalog" => $request->input('_catalog'),
                "filename" => $request->input('_filename'),
                "content" => $request->input('_content')
            ]);
        }
        return redirect('/dashboard#themes');
    } 
}