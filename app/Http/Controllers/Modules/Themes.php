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
        $files = File::allFiles(base_path()."\\resources\\views\\");
        foreach($files as $file){
            $new = str_replace(base_path()."\\resources\\views\\", "", $file);
            $explode = explode('\\', $new);
            $new_path = str_replace($explode[0], "", $new);
            print "<tr>";
            print "<td>".$explode[0]."</td>";
            print "<td>".$new_path."</td>";
            print "<td><a href='/dashboard/action:themes:update/".$new."'>
            <button class='button-styler-no-margin' style='border: none;'><i class='fas fa-edit'></i> Edit</button></a>
            <td>";
            print "<td>
            <form action='/dashboard/action:posts:delete' method='post'>
             <input type='hidden' name='_token' value='".csrf_token()."'/>
							<input type='hidden' name='post_id' value='".$new_path."'>
							<button type='submit' class='button-styler-no-margin' style='border: none;'>
								<i class='far fa-trash-alt'></i> Delete
							</button>
						</form>
            </td>";
            print "</tr>";
        }
    }

    public static function openFile() {

    }

    public static function deleteFile() {

    }

    public static function updateFile() {
        
    }
}