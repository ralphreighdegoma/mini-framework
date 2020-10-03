<?php

namespace App\Database;
use App\Response\Request;

class Connection {

    use DataHelpers;

    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $server_name = DB_SERVER;
    private $db_name = DB_NAME;
    public $connection;
    public $query;

    public function __construct() {
        $this->connect();
        return $this;
    }

    public function connect() {
        $this->connection = new \mysqli($this->server_name, $this->username, $this->password, $this->db_name);
        return $this->connection;
    }

    

    

}
