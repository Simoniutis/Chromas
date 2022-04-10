<?php

session_start();
if(!isset($_SESSION["el_pastas"])){
   header("Location: ../Register/login.php");
}

include 'config.php';
if(isset($_POST["submit"]) || isset($vardas) || isset($pavarde) || isset($el_pastas) || isset($slaptazodis)){
    $vardas = mysqli_real_escape_string($conn, $_POST["vardas"]);
    $pavarde = mysqli_real_escape_string($conn, $_POST["pavarde"]);
    $el_pastas = mysqli_real_escape_string($conn, $_POST["vardas"]);
    $slaptazodis = mysqli_real_escape_string($conn, $_POST["slaptazodis"]);

    $sql="UPDATE klientai SET vardas='$vardas', pavarde='$pavarde', el_pastas='$el_pastas', slaptazodis='$slaptazodis'  WHERE el_pastas='{$_SESSION["el_pastas"]}'";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Sėkmingai pakeisti duomenys');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body class="profilepage">
    <div class ="wrapper">
        <form action="" method="post">
            <?php
            
            $sql="SELECT * FROM klientai WHERE el_pastas='{$_SESSION["el_pastas"]}'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                        <div class="inputBox">
                            <label for="vardas">Vardas</label>
                            <input type="text" id="vardas" name="vardas"  placeholder="Vardas" value="<?php echo $row['vardas'];?>" required>
                        </div>
                        <div class="inputBox">
                           <label for="pavarde">Pavardė</label>
                            <input type="text" id="pavarde" name="pavarde" placeholder="Pavarde" value="<?php echo $row['pavarde'];?>" required>
                        </div>
                        <div class="inputBox">
                          <label for="el_pastas">El. Paštas</label>
                          <input type="email" id="el_pastas" name="el_pastas"  placeholder="El. paštas" value="<?php echo $row['el_pastas'];?>" required>
                        </div>
                        <div class="inputBox">
                            <label for="slaptazodis">Slaptažodis</label>
                             <input type="password" id="slaptazodis" name="slaptazodis" placeholder="Slaptažodis" value="<?php echo $row['slaptazodis'];?>" required>
                        </div>
                        
                    <?php
                }
            }

            ?>
            <div class="inputBox">
                 <button type="submit" name="submit" class= "btn">Keisti duomenis</button>
            </div>
        </form>
    </div>
</body>
</html>
