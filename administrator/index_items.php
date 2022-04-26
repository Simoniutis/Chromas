<?php
require_once('DB.php');

$db = new DB();
$data = $db->searchDataItems("");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-32">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Prekių paieška</title>
</head>
<body>
   <div class="header">Prekių paieška</div>
   <p class="form__text">
       <a class="form__link" href="./index_clients.php" id="items">Klientų paieška</a>
       <a class="form__link" href="./index_favourite_items.php" id="items">Įsimintų prekių paieška</a>
   </p>
   <form action="./search_items.php" method="POST">
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
