<?php

namespace App\Http\Controllers\Modules\Posts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Carbon\Carbon;

class Add extends \App\Http\Controllers\Modules\Posts {

    public static function view(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request))
        {
            $data_list = self::get_mount_path();
            return view('admin_template.posts.add', ["data_list" => $data_list]);
        }

        return redirect('/dashboard#posts');
    }

    public static function get_mount_path() {
        $result = DB::select('select menus.pathway from menus where menus.type = :type', [
            "type" => 'post'
        ]);

        if(count($result) < 1) {
            $result = [];
        }

        return $result;
    }

    public static function add(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            $result = DB::select('select * from posts where custom_path = :custom_path', [
                "custom_path" => $request->input('custom_path')
            ]);
    
            if (count($result) == 0) {
                $mytime = Carbon::now('Europe/Warsaw');

                DB::insert('insert into posts(mount_at, custom_path, title, content, author, date) values(:mount_at, :custom_path, :title, :content, :author, :date)', [
                    "mount_at" => $request->input('mount_at'),
                    "custom_path" => $request->input('custom_path'),
                    "title" => $request->input('title'),
                    "content" => $request->input('content'),
                    "author" => $request->session()->get('user'),
                    "date" => $mytime->toDateTimeString()
                ]);
            }
        }
        return redirect('/dashboard');
    } 
}