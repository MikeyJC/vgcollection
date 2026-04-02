<?php

namespace App\config;

class Database
{
    protected $db;
    public function __construct()
    {
        $this->db = $this->connect();
    }

    public static function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "vgcollection_db";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";

        return $conn;
    }
}