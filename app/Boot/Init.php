<?php

namespace App\Boot;

use App\Response;

class Init {

    private $args = [];
    private $url_path = [];

    public function __construct() {
        $this->args = collect($_REQUEST);
        $this->url_path = $_SERVER['REQUEST_URI'];
    }

   

    public function requestPipe() {
        echo $this->url_path;
    }   
}
