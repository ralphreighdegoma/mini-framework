<?php

namespace App\Models;
use App\Response\Request;
use App\Database\Connection;

class Players {

    public $conn;
    public $where = "";

    public function __construct() {
        $this->conn = new Connection();
    }

    public function get() {

        $sql = "SELECT
                player_totals.age, 
                player_totals.games, 
                player_totals.games_started, 
                player_totals.minutes_played, 
                player_totals.field_goals, 
                player_totals.field_goals_attempted, 
                player_totals.2pt_attempted, 
                player_totals.2pt, 
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
                player_totals.3pt, 
                player_totals.3pt_attempted, 
                player_totals.steals, 
                player_totals.blocks, 
                player_totals.turnovers, 
                player_totals.personal_fouls
            FROM
                roster
                
              
                LEFT JOIN
                player_totals
                ON 
            roster.id = player_totals.player_id";


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
                player_totals.2pt_attempted, 
                player_totals.2pt, 
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
                player_totals.3pt, 
                player_totals.3pt_attempted, 
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

}
