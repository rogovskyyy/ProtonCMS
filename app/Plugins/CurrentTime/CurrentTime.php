<?php

namespace App\Plugins\CurrentTime;

Use Carbon\Carbon;

class CurrentTime {
    public static function main() {
        $mytime = Carbon::now('Europe/Warsaw');
        return "Current date: ".$mytime->toDateTimeString()."<br />";
    }
}