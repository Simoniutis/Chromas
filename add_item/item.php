<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "chromas";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['patvirtinti'])){
    if(!empty($_POST['pavadinimas']) && !empty($_POST['kaina']) &&
        !empty($_POST['telefonas']) && !empty($_POST['miestas']) && !empty($_POST['adresas'])) {
        $filename = $_FILES["choosefile"]["name"];
        $filename_second = $_FILES["choosefile1"]["name"];
        $filename_third = $_FILES["choosefile2"]["name"];
        
        $folder = "uploads/";
        $first = $folder . basename($filename);
        $seocnd = $folder . basename($filename_second);
        $third = $folder . basename($filename_third);

        $tempname = $_FILES["choosefile"]["tmp_name"];
        $tempname_second = $_FILES["choosefile1"]["tmp_name"];
        $tempname_third = $_FILES["choosefile2"]["tmp_name"];
        
                    $pavadinimas = $_POST["pavadinimas"];
                     $aprasymas = trim($_POST['aprasymas']);
                    $kategorija = $_POST["kategorija"];
                    $bukle = $_POST["bukle"];
                    $kaina = $_POST["kaina"];
                    $telefonas = $_POST["telefonas"];
                    $miestas = $_POST["miestas"];
                    $adresas = $_POST["adresas"];
                    $query = "insert into prekes_ikelimas(pavadinimas,kategorija, bukle, kaina, telefonas,miestas,adresas, filename, aprasymas, filename_second, filename_third)  values('$pavadinimas', '$kategorija', 
                   '$bukle', '$kaina', '$telefonas', '$miestas', '$adresas', '$filename', '$aprasymas', '$filename_second', '$filename_third')";
                    $run = mysqli_query($conn, $query) or die(mysqli_error());
                    if ($run) {
                        echo "<script> location.href='http://localhost/Mano/main/index.php'; </script>";
                        exit;
                        
                    } else {
                        echo "Error";
                    }
                     move_uploaded_file($tempname, $first);
                       move_uploaded_file($tempname_second , $seocnd);
                           move_uploaded_file($tempname_third, $third);
    }
    else {
        echo "Error";
    }
}
?>