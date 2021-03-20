<?php

use App\Http\Controllers\EditHtmlController;
use App\Http\Controllers\SessionController;
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

Route::group(['prefix'=>'dashboard','as'=>'dashboard'], function(){

    Route::get('/', function(Request $request) {
        if($request->session()->has('user')) {
            return view('admin_template.index');
        }
        return redirect('/dashboard/login');
    });


    Route::get('login', [SessionController::class, 'view_login']);

    Route::post('action:login', [SessionController::class, 'action_login']);

    Route::post('action:logout', [SessionController::class, 'action_logout']);


});