<?php

namespace App\Response;


use App\Router;

class Request {

    public function __construct() {

    }

    public function gateway($uri) {
        return Router::provider($uri);
    }
}