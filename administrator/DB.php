<?php

class DB{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "chromas";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error())
    {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else
    
    public function __construct(){
        echo "Hi";
    }
}