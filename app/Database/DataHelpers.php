<?php

namespace App\Database;


trait DataHelpers {

    public function prepare($sql) {
        $this->connection->prepare($sql);
        return $this;
    }

    public function get($sql) {
        $data = $this->connection->query($sql);
        return $this->pretty($data);
    }

    public function first($sql) {
        $data = $this->connection->query($sql);
        return $this->prettyFirst($data);
    }

    public function prettyFirst($src) {

        if (!is_object($src)) {
            return $src;
        }
    
        $data = [];
        while ($row = $src->fetch_assoc()) {
            $data[] = $row;
        }
        return $data[0];
        
    }

    public function pretty($src) {

        if (!is_object($src)) {
            return $src;
        }
    
        $data = [];
        while ($row = $src->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
        
    }



    public function filter($where) {
        $where_statement = "";
        foreach($where as $key =>  $w) {
            if($key == 0) {
                $where_statement .= " where ";
            }else{
                $where_statement .= " and where ";
            }
            
        }
        

        return $where_statement;
    }

}