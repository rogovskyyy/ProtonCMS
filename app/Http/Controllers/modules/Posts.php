<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Posts extends Controller  {
    public static function action_get_all_posts() {
        $result = DB::select('select * from posts');
        if(count($result) > 0) {
            return $result;
        } else {
            return [];
        }
    }

    public static function post($id) {
        $result = DB::select('select * from posts where posts.id = :id', [
            "id" => $id
        ]);

        if(count($result) == 1) {
            return $result;
        } else {
            return [];
        }
    }
}