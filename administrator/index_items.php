<?php
require_once('DB.php');

$db = new DB();
$data = $db->searchDataItems("");

// var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-32">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prekių paieška</title>
</head>
<body>
   <h1>Paieška</h1> 
   <p class="">
       <a class="" href="./index.php" id="items">Vartotojų paieška</a>
   </p>
   <form action="./search_items.php" method="POST">
       <input type="text" name="name" placeholder="Atlikite paiešką" id="searchBox" oniput=search(this.value)>
   </form>

   <ul id="dataViewer">
       <?php foreach($data as $i) { ?>
       <li><?php echo $i["pavadinimas"]; }?></li> 
   </ul>

   <script src="main.js"></script>
</body>
</html>