<?php

namespace App\Http\Controllers\Modules\Settings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Update extends \App\Http\Controllers\Modules\Settings {

    public static function update(Request $request) {
        if(\App\Http\Controllers\SessionController::has_session($request)) {
            DB::update('update settings set cfgValue = :cfgValue where cfgKey = :cfgKey', [
                "cfgKey" => $request->input('_cfgkey'),
                "cfgValue" => $request->input('_cfgvalue')
            ]);
        }
        return redirect('/dashboard#settings');
    } 
}