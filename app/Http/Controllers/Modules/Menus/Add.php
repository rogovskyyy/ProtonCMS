<?php

namespace App\Http\Controllers\Modules\Menus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Add extends \App\Http\Controllers\Modules\Menus {

    public static function view(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request))
            return view('admin_template.menus.add');
        else 
            return redirect('/dashboard/login');
    }

    public static function add(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            $result = DB::select('select * from menus, pages where pathway = :pathway', [
                "pathway" => $request->input('pathway')
            ]);
    
            if (count($result) == 0) {
                DB::insert('insert into menus(name, pathway, type, description) values(:name, :pathway, :type, :description)', [
                    "name" => $request->input('name'),
                    "pathway" => $request->input('pathway'),
                    "type" => $request->input('type'),
                    "description" => $request->input('description')
                ]);
            }
        }
        return redirect('/dashboard');
    } 
}