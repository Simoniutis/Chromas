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
        $tempname = $_FILES["choosefile"]["tmp_name"];
        $filename_second = $_FILES["choosefile1"]["name"];
        $tempname_second = $_FILES["choosefile1"]["tmp_name"];
        $filename_third = $_FILES["choosefile2"]["name"];
        $tempname_third = $_FILES["choosefile2"]["tmp_name"];
        $folder = "uploads/".$filename;
        $folder_second = "uploads/".$filename_second;
        $folder_third = "uploads/".$filename_third;
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
                        echo "Pavyko";
                        
                    } else {
                        echo "Error";
                    }
                  if (move_uploaded_file($tempname, $folder)) {

                       $msg = "Image uploaded successfully";

                  }else{

                    $msg = "Failed to upload image";
                  }
    }
    else {
        echo "Error";
    }
}
?>