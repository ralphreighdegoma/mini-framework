<?php

namespace App\Response;

use App\Router\RouterProvider;

class View {

    private $page;

    public function __construct($uri, $data) {
       return $this->view($uri, $data);
    }

    public function __toString() {
        return $this->page;
    }

    public function output($path, $data){
        $data = $data;
        include_once $path;
    }

    public function viewExist($path) {
        return file_exists($path);
    }

    public function view($path, $data) {

        $ext = ".php";
        $parent = VIEW_PATH_INCLUDE;
        $path = $parent.$path.$ext;
        

        $this->page = (string) $this->output($path , $data);
    }
}