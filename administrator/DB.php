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

    public function viewDataItems(){
        $query = "SELECT * FROM chromas.prekės";
        $stmt = $this ->con->prepare($query);
        $stmt ->execute();
        $data= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function viewDataFavouriteItems(){
        $query = "SELECT * FROM chromas.isimintos_prekes";
        $stmt = $this ->con->prepare($query);
        $stmt ->execute();
        $data= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function searchData($name){
        $query = "SELECT * FROM chromas.klientai WHERE vardas LIKE :name";
        $stmt = $this->con->prepare($query);
        $stmt->execute(["name"=> "%" . $name . "%"]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function searchDataItems($name){
        $query = "SELECT * FROM chromas.prekes WHERE pavadinimas LIKE :name";
        $stmt = $this->con->prepare($query);
        $stmt->execute(["name"=> "%" . $name . "%"]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function searchDataFavouriteItems($name){
        if (is_numeric($name)) {
            $query = "SELECT * FROM chromas.isimintos_prekes WHERE pirkejo_id LIKE :name";
        } else {
            $query = "SELECT * FROM chromas.isimintos_prekes WHERE pavadinimas LIKE :name";
        }
        $stmt = $this->con->prepare($query);
        $stmt->execute(["name"=> "%" . $name . "%"]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
