<?php

namespace App\Plugins\CurrentTime;

Use Carbon\Carbon;

class CurrentTime {
    public static function main() {
        $mytime = Carbon::now();
        return "Current date: ".$mytime->toDateTimeString()."<br />";
    }
}