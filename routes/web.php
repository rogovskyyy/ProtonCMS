<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditHtmlController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('default.index');
});

//Route::group(['prefix'=>'proton','as'=>'proton'], function(){
//
//    Route::get('/', [AdminController::class, 'isLogged']);
//    
//    Route::get('/template', [EditHtmlController::class, 'getContent']);
//    Route::post('/template/update', [EditHtmlController::class, 'setContent']);
//    
//    Route::post('/login', [AdminController::class, 'login']);
//    Route::post('/logout', [AdminController::class, 'logout']);
//});