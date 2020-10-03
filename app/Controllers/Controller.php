<?php

namespace App\Controllers;

use App\Response\View;

class Controller{

    public $view; 

    public static function response($path, $data) {
        return new View($path, $data);
    }
}
