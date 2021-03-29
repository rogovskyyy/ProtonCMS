<?php

namespace App\Http\Controllers\Modules;

use Directory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class Themes extends Controller 
{
    public static function get_all_files() {
        $result = DB::select('select themes.catalog, themes.filename from themes');
        foreach($result as $value) {
            print "<tr>";
            print "<td>".$value->catalog."</td>";
            print "<td>".$value->filename."</td>";
            print "<td><a href='/dashboard/action:themes:update/".$value->catalog."@".$value->filename."'><button class='button-styler-no-margin' style='border: none;'><i class='fas fa-edit'></i> Edit</button></a></td>";
            print "<td>
                <form action='/dashboard/action:themes:delete' method='post'>
                    <input type='hidden' name='_token' value='".csrf_token()."'>
                    <input type='hidden' name='_catalog' value='".$value->catalog."'>
                    <input type='hidden' name='_filename' value='".$value->filename."'>
                    <button type='submit' class='button-styler-no-margin' style='border: none;'>
                        <i class='far fa-trash-alt'></i> Delete
                    </button>
                </form>
            </td>";

            print "</tr>";
        }
    }
}