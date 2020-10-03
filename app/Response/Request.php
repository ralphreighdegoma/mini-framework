<?php

namespace App\Response;

use App\Router\RouterProvider;

class Request {

    public function __construct($uri) {
        $this->gateway($uri);
    }

    public function gateway($uri) {
        $router = new RouterProvider($uri);
        echo $router->go();
    }

}