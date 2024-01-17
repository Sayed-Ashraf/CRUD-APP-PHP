<?php 
$id =  $_GET['id'];
require("./connection.php");
$result = $conn -> query("SELECT * FROM `products` WHERE `ID` = $id");
$product = $result -> fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <title>CRUD App</title>
</head>
<body>
<div class="container-fluid bg-dark  vh-100 d-flex justify-content-center align-items-center">
    <div class="w-50 bg-white rounded p-3">
        <h1>Product Details</h1>
        <h2><?php echo $product["Name"] ?></h2>
        <h2><?php echo $product["Price"] ?></h2>
        <h2><?php echo $product["Description"] ?></h2>
        <a class="btn btn-success mt-3" href="<?php echo "./update.php?id=$id"?>">Edit</a>
        <a class="btn btn-primary mt-3"href="./">Back</a>
    </div>
</div>
</body>
</html>
