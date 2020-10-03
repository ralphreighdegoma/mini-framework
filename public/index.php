<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/constants.php';
use Illuminate\Support;

use App\Boot\Init;

$boot = new Init();
return $boot->requestPipe();