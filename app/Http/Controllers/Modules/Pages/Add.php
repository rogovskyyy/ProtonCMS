<?php

namespace App\Http\Controllers\Modules\Pages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Add extends \App\Http\Controllers\Modules\Pages {

    public static function view(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            $result = DB::select('select * from menus m where not exists (select null from pages p where p.path = m.pathway) and m.type = :type', ["type" => 'page']);
            return view('admin_template.pages.add', ["data_list" => $result]);
        } else {
            return redirect('/dashboard/login');
        }   
    }

    public static function add(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            $result = DB::select('select * from pages where path = :path', [
                "path" => $request->input('path')
            ]);
    
            if (count($result) == 0) {
                DB::insert('insert into pages(path, filename) values(:path, :filename)', [
                    "path" => $request->input('path'),
                    "filename" => $request->input('filename'),
                ]);
            }
        }
        return redirect('/dashboard');
    }
}