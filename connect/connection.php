<?php

class connection{
    public function __construct()
    {
        include_once (__DIR__ .'/../database/database.php');
        $this->db_params = $db_params;
    }

    public function connect()
    {
        $conn = new mysqli(
            $this->db_params['servername'],
            $this->db_params['username'],
            $this->db_params['password'],
            $this->db_params['dbname']
        );

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            echo "Connected successfully";
        }
    }
}