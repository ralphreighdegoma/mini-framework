<?php

namespace App\Boot;
use App\Response\Request;

class Init {

    private $args = [];
    private $url_path = [];

    public function __construct() {
        $this->args = collect($_REQUEST);
        $this->url_path = strtok($_SERVER['REQUEST_URI'], "?");
        define("URI", $this->url_path);
    }

    public function requestPipe() {
        $request = new Request($this->url_path);
        return $request;
    }   
}
