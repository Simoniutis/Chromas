<?php
     session_start();
    echo "test";

    $connect = mysqli_connect("localhost", "root", "", "chromas");
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        $sql = "SELECT * FROM klientai WHERE el_pastas = '".$username."' AND slaptazodis = '".$password."'";
        $result = mysqli_query($connect, $sql);
        $num_row = mysqli_num_rows($result);
        if($num_row > 0)    {
            $data = mysqli_fetch_array($result);
            $_SESSION['vardas'] = $data['vardas'];
            $_SESSION['pavarde'] = $data['pavarde'];
            $_SESSION['el_pastas'] = $data['el_pastas'];
            $_SESSION['slaptazodis'] = $data['slaptazodis'];
            $_SESSION['user_id'] = $data["id_klientas"];
        }
    }
?>
