<?php

class DB{
    private $host = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbname = "chromas";    
    private $con;

    public function __construct(){
        $dsn = "mysql:host" . $this->host . ";dbname=" . $this-> dbname;

        try{
            $this-> con=new PDO($dsn, $this->dbUsername, $this -> dbPassword);
            $this-> con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "pavyko prisijungti";
        }
        catch(PDOException $e){
            echo "nepavyko prisijungti: " . $e->getMessage();
        }
    }

    public function viewData(){
        $query = "SELECT vardas FROM chromas.klientai";
        $stmt = $this ->con->prepare($query);
        $stmt ->execute();
        $data= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function searchData($name){
        $query = "SELECT vardas FROM chromas.klientai WHERE vardas LIKE :name";
        $stmt = $this->con->prepare($query);
        $stmt->execute(["name"=> "%" . $name . "%"]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}