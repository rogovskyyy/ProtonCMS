<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Pages extends Controller {
    public static function action_get_all_pages() {
        $result = DB::select('select menus.name, pages.path, pages.filename from menus, pages where menus.pathway = pages.path AND menus.type = :type', ["type" => "page"]);
        if(count($result) > 0) {
            return $result;
        } else {
            return [];
        }
    }
}