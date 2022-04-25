<?php
    $con = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con, 'chromas');

    $sql = "DELETE FROM klientai WHERE id_klientas='$_GET[id]'";

    if (mysqli_query($con, $sql))
        header("refresh:1; url=index_clients.php");
    else    
        echo "Nepavyko ištrinti";
?>