<?php

namespace App\Http\Controllers\Modules\Pages;

use Exception;
use     Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Update extends \App\Http\Controllers\Modules\Pages {

    public static function view(Request $request, $name) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            $data = self::get_element($name);

            return view('admin_template.pages.update', [
                "path" => $data[0]->path,
                "filename" => $data[0]->filename,
            ]);
        }
        return redirect('/dashboard/login');
    }

    public static function get_element($name) {
        $result = DB::select('select * from pages where name = :name', [
            "name" => $name
        ]);

        if(count($result) != 1) {
            return redirect('/dashboard#menus');
        }
        return $result;
    }

    public static function update(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            DB::update('update menus set name = :name, description = :description where pathway = :pathway', [
                "name" => $request->input('name'),
                "description" => $request->input('description'),
                "pathway" => $request->input('pathway')
            ]);
        }
        return redirect('/dashboard#menus');
    }
}