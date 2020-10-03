<?php

namespace App\Controllers;
use App\Response;
use App\Models\Players;

class HomeController extends Controller{

    public function show() {

        $players = new Players();
        
        $data = ["players" => $players->get()];
        return $this->response("home", $data);
    }   
}
