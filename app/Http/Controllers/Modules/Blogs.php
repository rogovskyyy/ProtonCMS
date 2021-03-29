<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Blogs extends Controller {
    public static function get_all() {
        $result = DB::select('select * from posts');
        return $result;
    }
}