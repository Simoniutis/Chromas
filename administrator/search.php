<?php
require_once('DB')
$name = $_POST['name'];
$con = new DB();
$data = $con->searchData($name);

echo json_encode($data);