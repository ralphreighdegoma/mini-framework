<?php

namespace App\Controllers;
use App\Response;
use App\Models\Player;

class HomeController extends Controller{

    public function show() {

        $players = new Player();
        
        $data = ["players" => $players->getPlayers()];
        return $this->response("home", $data);
    }   
}
