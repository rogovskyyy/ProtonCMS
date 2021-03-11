<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditHtmlController extends Controller 
{
    public function getContent(Request $request) {
        if($request->session()->has('admin_logged')) {
            $content = Storage::disk('local')->get('index.blade.php');
            return view('admin.edit', ['content' => $content]);
        }
        return view('admin.login');
    }

    public function setContent(Request $request) {
        if($request->session()->has('admin_logged')) {
            $content = $request->input('content');
            Storage::disk('local')->put('index.blade.php', $content);
        }
        return redirect('/admin/template');
    }
}