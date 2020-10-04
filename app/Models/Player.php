<?php

namespace App\Models;
use App\Response\Request;
use App\Database\Connection;

class Player {

    public $conn;
    public $where = "";

    public function __construct() {
        $this->conn = new Connection();
    }

    public function wherePromise($params = null) {

        if(empty($params) || is_null($params)) {
            return "";
        } 

        $team = isset($params["team"]) ? $params["team"] : "";
        $position = isset($params["position"]) ? $params["position"] : "";
        $player = isset($params["player"]) ? $params["player"] : "";

        $where = "";
        
        if(!empty($team)) {
            $where = " where team_code = $team "; 
        }

        if(!empty($position)) {
            $where = !empty($where) ? $where." and " : $where;
            $where = " where pos = $position "; 
        }

        if(!empty($player)) {
            $where = !empty($where) ? $where." and " : $where;
            $where = " where name = $player "; 
        }

        return $where;

    }

    public function getPlayers($params = null) {

        $where = $this->wherePromise($params);

        $sql = "SELECT
                player_totals.age, 
                player_totals.games, 
                player_totals.games_started, 
                player_totals.minutes_played, 
                player_totals.field_goals, 
                player_totals.field_goals_attempted, 
                player_totals.2pt_attempted as second_attempt, 
                player_totals.2pt as two_points, 
                player_totals.free_throws, 
                player_totals.free_throws_attempted, 
                player_totals.offensive_rebounds, 
                player_totals.defensive_rebounds, 
                player_totals.assists, 
                roster.`name`, 
                roster.id, 
                roster.team_code, 
                roster.number, 
                roster.pos, 
                roster.height, 
                roster.dob, 
                roster.weight, 
                roster.nationality, 
                roster.years_exp, 
                roster.college, 
                player_totals.3pt as three_points, 
                player_totals.3pt_attempted as third_attempted, 
                player_totals.steals, 
                player_totals.blocks, 
                player_totals.turnovers, 
                player_totals.personal_fouls
            FROM
                roster
                
              
                LEFT JOIN
                player_totals
                ON 
            roster.id = player_totals.player_id
            
            $where
            ";


        $players = $this->conn->get($sql);

        return $players;
    }   


    public function getPlayer($id) {
        $sql = "SELECT
                player_totals.age, 
                player_totals.games, 
                player_totals.games_started, 
                player_totals.minutes_played, 
                player_totals.field_goals, 
                player_totals.field_goals_attempted, 
                player_totals.2pt_attempted as second_attempt, 
                player_totals.2pt as two_points, 
                player_totals.free_throws, 
                player_totals.free_throws_attempted, 
                player_totals.offensive_rebounds, 
                player_totals.defensive_rebounds, 
                player_totals.assists, 
                roster.`name`, 
                roster.id, 
                roster.team_code, 
                roster.number, 
                roster.pos, 
                roster.height, 
                roster.dob, 
                roster.weight, 
                roster.nationality, 
                roster.years_exp, 
                roster.college, 
                player_totals.3pt as three_points, 
                player_totals.3pt_attempted as third_attempted, 
                player_totals.steals, 
                player_totals.blocks, 
                player_totals.turnovers, 
                player_totals.personal_fouls
            FROM
                roster
                

                LEFT JOIN
                player_totals
                ON 
                roster.id = player_totals.player_id

                where roster.id = '{$id}' ";

  
        $players = $this->conn->first($sql);

        return $players;
    }

    public function playerStats($params) {

        $where = $this->wherePromise($params);

        $sql = "SELECT
                    player_totals.*
                FROM
                    player_totals
                    LEFT JOIN
                    roster
                    ON 
                        player_totals.player_id = roster.id
                    LEFT JOIN
                    team
                    ON 
                        roster.team_code = team.`code`
                        $where    
                    ";


        $stats = $this->conn->get($sql);

        return $stats;
    }

}
