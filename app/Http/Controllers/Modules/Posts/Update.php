<?php

namespace App\Http\Controllers\Modules\Posts;

use Exception;
use     Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Update extends \App\Http\Controllers\Modules\Posts {

    public static function view(Request $request, $id) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            $data = self::get_element($id);

            return view('admin_template.posts.update', [
                "id" => $data[0]->id,
                "mount_at" => $data[0]->mount_at,
                "custom_path" => $data[0]->custom_path,
                "title" => $data[0]->title,
                "content" => $data[0]->content,
            ]);
        }
        return redirect('/dashboard/login');
    }

    public static function get_element($id) {
        $result = DB::select('select * from posts where id = :id LIMIT 1', [
            "id" => $id
        ]);

        if(count($result) != 1) {
            return redirect('/dashboard#menus');
        }

        return $result;
    }

    public static function update(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            DB::update('update posts set custom_path = :custom_path, title = :title, content = :content where id = :id', [
                "custom_path" => $request->input('custom_path'),
                "title" => $request->input('title'),
                "content" => $request->input('content'),
                "id" => $request->input('id')
            ]);
        }
        return redirect('/dashboard#menus');
    }
}