<?php

class DBConnection
{
    private $server = "localhost";
    private $username = "root";
    private $pass = "";
    private $db = "vibe_lane_db";
    protected $con;


    public function __construct()
    {
        try{
            $this->con = new PDO(
                "mysql:host=" . $this->server . ";dbname=" . $this->db,
                $this->username,
                $this->pass,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                
            );
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->con;
    }
}