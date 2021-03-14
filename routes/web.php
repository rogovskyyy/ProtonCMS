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

Route::group(['prefix'=>'proton@dashboard','as'=>'proton@dashboard'], function(){
    
    Route::get('~login', function() {
        return view('admin_template.paths.login');
    });
    
    Route::get('/', function() {
        return view('admin_template.paths.index');
    });

    Route::get('~posts', function() {
        return view('admin_template.paths.posts');
    });

    Route::get('~pages', function() {
        return view('admin_template.paths.pages');
    });

    Route::get('~plugins', function() {
        return view('admin_template.paths.plugins');
    });

    Route::get('~themes', function() {
        return view('admin_template.paths.themes');
    });

    Route::get('~categories', function() {
        return view('admin_template.paths.categories');
    });

    Route::get('~tags', function() {
        return view('admin_template.paths.tags');
    });

    Route::get('~media-lib', function() {
        return view('admin_template.paths.media-lib');
    });

    Route::get('~menus', function() {
        return view('admin_template.paths.menus');
    });

    Route::get('~widgets', function() {
        return view('admin_template.paths.widgets');
    });

    Route::get('~database', function() {
        return view('admin_template.paths.database');
    });

    Route::get('~users', function() {
        return view('admin_template.paths.users');
    });

    Route::get('~comments', function() {
        return view('admin_template.paths.comments');
    });

    Route::get('~tools', function() {
        return view('admin_template.paths.tools');
    });

    Route::get('~settings', function() {
        return view('admin_template.paths.settings');
    });

});