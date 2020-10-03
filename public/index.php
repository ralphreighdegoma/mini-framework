<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Boot\Init;

$boot = new Init();
return $boot->requestPipe();