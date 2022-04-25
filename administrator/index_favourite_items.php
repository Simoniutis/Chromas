<?php
require_once('DB.php');

$db = new DB();
$data = $db->searchDataFavouriteItems("");

// var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Įsimintų prekių paieška</title>
</head>
<body>
   <div class="header">Įsimintų prekių paieška</div>
   <p class="form__text">
       <a class="form__link" href="./index_items.php" id="items">Prekių paieška</a>
       <a class="form__link" href="./index_clients.php" id="items">Klientų paieška</a>
   </p>
   <form action="search_favourite_items.php" method="POST">
       <input class="form_input" type="text" name="name" placeholder="Atlikite paiešką" id="searchBox" oniput=search(this.value)>
   </form>

   <div class="container">
   <ul id="dataViewer" class="form_unordered-list">
       <?php foreach($data as $i) { ?>
       <li><?php echo $i["pavadinimas"]; }?></li>
   </ul>

   <script src="main.js"></script>
   </div>
</body>
</html>
