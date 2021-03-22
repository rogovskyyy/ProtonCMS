<?php

use App\Http\Controllers\EditHtmlController;
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
    
    Route::get('action:pages:update/{name}', [\App\Http\Controllers\Modules\Pages\Update::class, 'view']);
    
    Route::post('action:pages:update', [\App\Http\Controllers\Modules\Pages\Update::class, 'update']);
    
    Route::post('action:pages:delete', [\App\Http\Controllers\Modules\Pages\Delete::class, 'delete']);


});