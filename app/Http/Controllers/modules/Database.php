<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Database extends Controller 
{
    public static function is_connection() {
        try {
            DB::getPdo();
            print "<div class='alert alert-success' role='alert'>Connected to database <i class='fas fa-check'></i></div>";
        } catch (\Exception $e) {
            print "<div class='alert alert-danger' role='alert'>Could not connect to the database <i class='fas fa-times'></i></div>";
            print "<div class='alert alert-primary' role='alert'>You can update all database features in .env file</div>";
        }

        $exploder = explode(".", env("DB_HOST"));
        $host = $exploder[0]." ... ".$exploder[count($exploder) - 1];

        $exploder = env("DB_PORT");
        $port = $exploder[0]." ... ".$exploder[strlen($exploder) - 1];

        $exploder = env("DB_DATABASE");
        $name = $exploder[0]." ... ".$exploder[strlen($exploder) - 1];

        $exploder = env("DB_USERNAME");
        $username = $exploder[0]." ... ".$exploder[strlen($exploder) - 1];

        $exploder = env("DB_PASSWORD");
        $pass = $exploder >= strlen(2) ? $exploder[0]." ... ".$exploder[strlen($exploder) - 1] : "...";

        print "connection type : ".env("DB_CONNECTION").'<br /><br />';
        print "host : ".$host.'<br /><br />';
        print "port : ".$port.'<br /><br />';
        print "name : ".$name.'<br /><br />';
        print "username : ".$username.'<br /><br />';
        print "password : ".$pass.'<br /><br />';

    }
}