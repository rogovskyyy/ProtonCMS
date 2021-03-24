<?php

namespace App\Http\Controllers\Modules\Posts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Delete extends \App\Http\Controllers\Modules\Posts {

    public static function delete(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            DB::delete('delete from posts where id = :id', [
                "id" => $request->input('post_id')
            ]);
        }
        return redirect('/dashboard');
    }
}