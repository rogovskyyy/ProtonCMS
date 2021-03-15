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

Route::group(['prefix'=>'pcms-admin','as'=>'pcms-admin'], function(){

    Route::get('/', function(Request $request) {
        if($request->session()->has('user')) {
            return view('admin_template.paths.index');
        }
        return redirect('/pcms-admin/login');
    });


    Route::get('login', [SessionController::class, 'view_login']);

    Route::post('action:login', [SessionController::class, 'action_login']);

    Route::post('action:logout', [SessionController::class, 'action_logout']);
    






    Route::get('posts', function() {
        return view('admin_template.paths.posts');
    });

    Route::get('pages', function() {
        return view('admin_template.paths.pages');
    });

    Route::get('plugins', function() {
        return view('admin_template.paths.plugins');
    });

    Route::get('themes', function() {
        return view('admin_template.paths.themes');
    });

    Route::get('categories', function() {
        return view('admin_template.paths.categories');
    });

    Route::get('tags', function() {
        return view('admin_template.paths.tags');
    });

    Route::get('media-lib', function() {
        return view('admin_template.paths.media-lib');
    });

    Route::get('menus', function() {
        return view('admin_template.paths.menus');
    });

    Route::get('widgets', function() {
        return view('admin_template.paths.widgets');
    });

    Route::get('database', function() {
        return view('admin_template.paths.database');
    });

    Route::get('users', function() {
        return view('admin_template.paths.users');
    });

    Route::get('comments', function() {
        return view('admin_template.paths.comments');
    });

    Route::get('tools', function() {
        return view('admin_template.paths.tools');
    });

    Route::get('settings', function() {
        return view('admin_template.paths.settings');
    });

});