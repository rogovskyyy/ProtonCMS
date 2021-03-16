<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Menus extends Controller 
{
    public static function action_get_all_menus() {
        $result = DB::select('select * from menus');
        if(count($result) > 0) {
            return $result;
        }
    }
}