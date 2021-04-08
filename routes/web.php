<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\Modules\Menus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Carbon;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
*   Wydymanie systemu routingu w Laravel PHP XD
*   Pozdrawiam ze straconych 12h
*   Wreszcie...
*/


class Faker {
    public function generate() {
        $result = DB::select('select pages.path, themes.content from pages, themes, settings where pages.filename = themes.filename and themes.catalog = (select settings.cfgValue from settings where settings.cfgKey = :default_template) GROUP by pages.path', [
            "default_template" => "default_template"
        ]);

        for($i = 0; $i <= count($result) - 1; $i++) {
            $raw = $result[$i]->content;
            call_user_func_array('Route::get', [ 
                $result[$i]->path, 
                fn() => view_raw($raw, [])->render()]
            );
        }

        $result = DB::select('select * from posts');
        if(count($result) > 0) {

            $context = DB::select('select content from themes where themes.catalog = :default_theme AND filename = :blog LIMIT 1', [
                "default_theme" => "default_theme",
                "blog" => "blog.blade.php"
            ]);

            for($i = 0; $i <= count($result) - 1; $i++) {
                $blog = DB::select('select * from posts where id = :id', [
                    "id" => $result[$i]->id
                ]);

                $blog = json_decode(json_encode($blog), true);

                $raw = $context[0]->content;
                $date = Carbon::createFromFormat('Y-m-d H:i:s', $result[$i]->date);
                $fullPath = $result[$i]->mount_at."/".$date->year."/".$date->month."/".$date->day."/".$result[$i]->id;
                call_user_func_array('Route::get', [ 
                    $fullPath, 
                    fn() => view_raw($raw, $blog[0])->render()]
                );

                $raw = $context[0]->content;
                $fullPath = $result[$i]->mount_at."".$result[$i]->custom_path;
                call_user_func_array('Route::get', [ 
                    $fullPath, 
                    fn() => view_raw($raw, $blog[0])->render()]
                );
            }
        } 
        else 
        {
            return [];
        }
    }
}

$fake_route = new Faker();
$fake_route->generate();

Route::get('/test', function() {
    return view('test.index');
});


Route::group(['prefix'=>'dashboard','as'=>'dashboard'], function() {

    /*      Main section        */
    Route::get('/', function(Request $request) {
        if($request->session()->has('user')) {
            return view('admin_template.index');
        }
        return redirect('/dashboard/login');
    });

    /*      Login section        */
    Route::get('login', [SessionController::class, 'view']);

    Route::post('action:login', [SessionController::class, 'login']);

    Route::post('action:logout', [SessionController::class, 'logout']);


    /*      Menu section        */
    Route::get('action:menus:add', [\App\Http\Controllers\Modules\Menus\Add::class, 'view']);

    Route::post('action:menus:add', [\App\Http\Controllers\Modules\Menus\Add::class, 'add']);

    Route::get('action:menus:update/{name}', [\App\Http\Controllers\Modules\Menus\Update::class, 'view']);

    Route::post('action:menus:update', [\App\Http\Controllers\Modules\Menus\Update::class, 'update']);

    Route::post('action:menus:delete', [\App\Http\Controllers\Modules\Menus\Delete::class, 'delete']);


    /*      Pages section        */
    Route::get('action:pages:add', [\App\Http\Controllers\Modules\Pages\Add::class, 'view']);

    Route::post('action:pages:add', [\App\Http\Controllers\Modules\Pages\Add::class, 'add']);
    
    Route::post('action:pages:delete', [\App\Http\Controllers\Modules\Pages\Delete::class, 'delete']);


    /*      Pages section        */
    Route::get('action:posts:add', [\App\Http\Controllers\Modules\Posts\Add::class, 'view']);

    Route::post('action:posts:add', [\App\Http\Controllers\Modules\Posts\Add::class, 'add']);

    Route::get('action:posts:update/{id}', [\App\Http\Controllers\Modules\Posts\Update::class, 'view']);

    Route::post('action:posts:update', [\App\Http\Controllers\Modules\Posts\Update::class, 'update']);
        
    Route::post('action:posts:delete', [\App\Http\Controllers\Modules\Posts\Delete::class, 'delete']);


    /*      Themes section        */
    Route::get('action:themes:add', [\App\Http\Controllers\Modules\Themes\Add::class, 'view']);

    Route::post('action:themes:add', [\App\Http\Controllers\Modules\Themes\Add::class, 'add']);

    Route::get('action:themes:update/{catalog}@{filename}', [\App\Http\Controllers\Modules\Themes\Update::class, 'view']);

    Route::post('action:themes:update', [\App\Http\Controllers\Modules\Themes\Update::class, 'update']);
        
    Route::post('action:themes:delete', [\App\Http\Controllers\Modules\Themes\Delete::class, 'delete']);


    /*      Settings section        */
    Route::post('action:settings:update', [\App\Http\Controllers\Modules\Settings\Update::class, 'update']);
});