<?php

namespace Thusitha\Package;

use Carbon\Carbon;

class Time
{

    function __construct()
    {
        echo '...................................................' . PHP_EOL;
        echo 'Hi, I am Time Package' . PHP_EOL;
        $now_time = sprintf("Now: %s", Carbon::now());
        echo  $now_time . PHP_EOL;
        echo '...................................................' . PHP_EOL;
    }
}
