<?php
require_once('DB.php');
$db=new DB();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vartotoju paieska</title>
</head>
<body>
   <h1>Paieska</h1> 
   <form action="DB.php" method="POST">
       <input type="text" name="name" placeholder="Atlikite paieska" id="searchBox">
   </form>
   <ul id="dataviewer">
       <il>Name</il>
   </ul>
</body>
</html>
