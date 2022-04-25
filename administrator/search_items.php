<?php
require_once('DB.php');
$name = $_POST['name'];
$con = new DB();
$data = $con->searchDataItems($name);
?>

<?php if (count($data) > 0): ?>
<html>
<head>
  
<style>
*{
    margin: 0;
    padding: 0px;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    max-width: 100%;
    margin: auto;
    margin-top: 50px;
    justify-content: center;
    align-items: center;
}

.container {
  width: 80%;
  max-width: 80%;
  margin: auto;
  margin-bottom: 90px;
  box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
  border-radius: 4px;
  background: #ffffff;
}

.header {
  margin-top: 2rem;
  font-size: 35px;
  text-align: center;
  padding-bottom: 20px;
  font-weight: bold;
  color: #054700;
}

.form__text {
  text-align: center;
  font-size: 18px;
}

.form__link {
    color: #088000;
    text-decoration: none;
}

.form__link:hover {
    text-decoration: underline;
    color: #054700;
}

.form_input {
  width: 50%;
  display: flex;
  justify-content: center;
  padding: 12px 20px;
  margin: auto;
  margin-top: 20px;
  box-sizing: border-box;
  border-style: solid;
  background: #ffffff;
  font-size: 15px;
}

.form_unordered-list {
  background: #D3D3D3;
  padding: 20px;
}

.form_unordered-list li {
  background: #ffffff;
  color: black;
  padding: 5px;
  margin-left: 35px
}

.form__table {
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
}

.form__table td, .fomr__table th {
  border: 2px solid #ddd;
  padding: 8px;
}

.form__table tr:nth-child(even) {
  background-color: #f2f2f2;
}

.form__table tr:hover {
  background-color: #ddd;
}

.form__table th {
  padding-top: 12px;
  padding-bottom: 12px;
  padding-left: 6px;
  text-align: left;
  background-color: #054700;
  color: white;
}

.form__text-search {
  padding-left: 40px;
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: left;
  font-size: 16px;
}

.form__link-search {
    color: #088000;
    text-decoration: underline;
}

.form__link-search:hover {
    text-decoration: underline;
    color: #054700;
}
</style>

</head>
<body>

<div class="container">
<p class="form__text-search">
    <a class="form__link-search" href="./index_items.php" id="items">Grįžti</a>
</p>
<table class="form__table">
  <tr>
      <th>Pavadinimas</th>
      <th>Kaina</th>
      <th>Nuolaida</th>
      <th>Tel. nr.</th>
      <th>Vieta</th>
      <th>Šalinimas</th>
  </tr>
  <?php
    foreach ($data as $key => $val) {
      echo 
        "<tr>"
          . "<td>{$val['pavadinimas']}</td>"
          . "<td>{$val['kaina']}</td>"
          . "<td>{$val['nuolaida']}</td>"
          . "<td>{$val['tel_nr']}</td>"
          . "<td>{$val['vieta']}</td>"
          . "<td><a class=form__link href=delete_items.php?id=".$val['id_preke'].">Šalinti</a></td>"
        ."</tr>";
    }
  ?>
</table>
<p class="form__text-search">
    <a class="form__link-search" href="./index_items.php" id="items">Grįžti</a>
</p>
</div>
<?php else: ?>
  <html>
    <head>
        <style>
            <style>
*{
    margin: 0;
    padding: 0px;
    box-sizing: border-box;
}
body{
    max-width: 100%;
    margin: auto;
    margin-top: 50px;
    justify-content: center;
    align-items: center;
}

.header {
  margin-top: 2rem;
  font-size: 35px;
  text-align: center;
  padding-bottom: 20px;
  font-weight: bold;
  color: #054700;
  font-family: sans-serif;
}

.form__text-search {
    text-align: center;
}

.form__link-search {
    color: #088000;
    text-decoration: underline;
    font-family: sans-serif;
    font-size: 24px;
}

.form__link-search:hover {
    text-decoration: underline;
    color: #054700;
}
        </style>
    </head>
    <body>
    <div class="header">Sąrašas tuščias</div>
    <p class="form__text-search">
        <a class="form__link-search" href="./index_items.php" id="items">Grįžti</a>
    </p>
    </body>
  </html>
<?php endif; ?>

</body>
</html>
