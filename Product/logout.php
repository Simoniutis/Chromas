<?php
//naudojama testavimui su prekių išsaugojimu
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["username"]);
header("Location:../Register/login.php");
?>