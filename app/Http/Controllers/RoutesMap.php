<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoutesMap extends Controller {

    public static function map_routes()  {

        $route_map = [];
        $data = DB::select('select pages.path, pages.filename from pages');

        for($i = 0; $i <= count($data) - 1; $i++) {
            array_push($route_map, [
                "path" => $data[$i]->path,
                "filename" => $data[$i]->filename
            ]);
        }

        return $route_map;
    }

    public static function default_path() {
        $path = DB::select('select settings.cfgValue from settings where cfgKey = :key LIMIT 1', [
            "key" => "default_template"
        ]);

        if(count($path) == 1) {
            return $path[0]->cfgValue;
        } else {
            return "default_theme";
        }
    }
}