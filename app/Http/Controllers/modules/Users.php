<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Users extends Controller 
{
    public static function action_get_all_users() {
        $result = DB::select('select * from users');
        if(count($result) > 0) {
            return $result;
        }
    }
}