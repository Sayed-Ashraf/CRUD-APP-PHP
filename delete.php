<?php 

$id = $_GET['id'];
require("./connection.php");
$result = $conn -> query("DELETE FROM `products` WHERE `ID` = $id");
header("location:index.php");