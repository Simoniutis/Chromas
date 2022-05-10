<?php
//naudojama testavimui su prekių išsaugojimu
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["username"]);
unset($_SESSION["el_pastas"]);
header("Location:../Register/login.php");
?>
