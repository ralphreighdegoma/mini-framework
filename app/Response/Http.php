<?php

namespace App\Response;

use App\Router\RouterProvider;

class Http {

    public function get() {
        $args = collect($_REQUEST);
        return $args;
    }

}