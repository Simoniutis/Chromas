<?php
$vardas = $_POST['vardas'];
$pavarde = $_POST['pavarde'];
$el_pastas = $_POST['el_pastas'];
$slaptazodis = $_POST['slaptazodis'];
$tel_nr = $_POST['tel_nr'];

if (!empty($vardas) || !empty($pavarde) || !empty($el_pastas) || 
!empty($slaptazodis) || !empty($tel_nr))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "chromas";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error())
    {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
        ');';
        
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else
    {
        $SELECT = "SELECT el_pastas From klientai Where el_pastas = ? Limit 1";
        $INSERT = "INSERT Into klientai (vardas, pavarde, el_pastas, slaptazodis, tel_nr) values(?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $el_pastas);
        $stmt->execute();
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0)
        {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssss", $vardas, $pavarde, $el_pastas, $slaptazodis,
            $tel_nr);
            $stmt->execute();
            echo "Naujas klientas įrašytas sėkmingai";
        }
        else
        {
            echo "Toks paštas jau yra užregistruotas";
        }
        $stmt->close();
        $conn->close();
    }
}
else
{
    echo "Reikia užpildyti visus laukus";
    die();
}
?>