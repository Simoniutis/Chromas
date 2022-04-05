<?php
require_once('DB.php');

$db = new DB();
$data = $db->searchData("");

// var_dump($data);
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
   <form action="search.php" method="POST">
       <input type="text" name="name" placeholder="Atlikite paieska" id="searchBox" oniput=search(this.value)>
   </form>

   <ul id="dataViewer">
       <?php foreach($data as $i) { ?>
       <li><?php echo $i["vardas"]; }?></li> 
   </ul>

   <script src="main.js"></script>
</body>
</html>
