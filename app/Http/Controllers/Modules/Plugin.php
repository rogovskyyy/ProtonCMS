<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Plugins\UserManagement;

class Plugin extends Controller 
{
    public static function scan_for_file() {

        $fileList = [];

        foreach(File::directories(app_path().'\plugins') as $value) {
            foreach(File::allFiles($value) as $filename)
            {
                if (basename($filename) == "config.json") {
                    $json = json_decode(file_get_contents($filename), true);
                    array_push($fileList, $json);
                }
            }
        }

        return $fileList;
    }
}