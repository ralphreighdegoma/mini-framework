<?php

namespace App\Controllers;

use App\Response;

class HomeController extends Controller{

    public function show() {
        $data = ["hey"];
        return $this->response("home", $data);
    }   
}
