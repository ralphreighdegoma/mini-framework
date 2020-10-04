<?php

namespace App\Controllers;
use App\Response;
use App\Models\Player;
use App\Response\Http;

class PlayerController extends Controller{

    public function show() {
        $params = new Http();
        $params = $params->get();

        $players = new Player();
        $player = $players->getPlayer($params['id']);
        $data = array("player" => $player);
        return $this->response("player/player", $data);
    }   
}
