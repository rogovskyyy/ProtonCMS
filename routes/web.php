<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\Modules\Menus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
    private static function view() { }
    private function add_routes($path, $filename) {
        call_user_func_array('Route::get', [$path, fn() => view($filename)]);
    }

    public function generate() {
        $map = App\Http\Controllers\RoutesMap::map_routes();
        $default = App\Http\Controllers\RoutesMap::default_path();

        for($i = 0; $i <= count($map) - 1; $i++) {
            $path = $default.".".explode(".", $map[$i]['filename'])[0];
            $this->add_routes($map[$i]['path'], $path);
        }
    }
}

$fake_route = new Faker();
$fake_route->generate();


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
});