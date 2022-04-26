<?php
    $con = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con, 'chromas');

    $sql = "DELETE FROM prekes WHERE id_preke='$_GET[id]'";

    if (mysqli_query($con, $sql))
        header("refresh:1; url=index_items.php");
    else    
        echo "Nepavyko ištrinti";
?>