<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Settings extends Controller  {
    public static function action_get_all_settings() {
        $result = DB::select('select * from settings');
        if(count($result) > 0) {
            return $result;
        } else {
            return [];
        }
    }
}