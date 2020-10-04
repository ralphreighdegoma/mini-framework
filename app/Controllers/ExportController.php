<?php

namespace App\Controllers;
use App\Response;
use App\Models\Player;
use App\Response\Http;
use App\Services\Export\Report;

class ExportController extends Controller{

    public function export() {
        
        $params = new Http();
        $params = $params->get();
        $type = isset($params["type"]) && !empty($params["type"]) ? $params["type"] : null;
        $format = isset($params["format"]) && !empty($params["format"]) ? $params["format"] : null;
        
        $players = new Player();

        if($type == "playerstats") {
            $stats = $players->playerStats($params);
        }else if($type == "players") {
            $stats = $players->getPlayers($params);
        }else{
            return "Provide your type please.";
        }

        $report = new Report($stats);

        if($format == "xml") {
            return $report->toXml();
        }else if($format == "csv") {
            return $report->toCsv();
        }else if($format == "json") {
            return $report->toJson();
        }else{
            return "Provide your format please.";
        }
    }   
}
