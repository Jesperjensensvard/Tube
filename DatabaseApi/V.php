<?php

class getit {
    
    function __construct() {
        include_once('databaseConn.php');
        $this->database = new Database();
    }


    public function bad() {

        $query = $this->database->connection->prepare("SELECT * FROM video;");
        $query->execute();
        $result = $query->fetchAll();

        return $result;
    }

}

?> 