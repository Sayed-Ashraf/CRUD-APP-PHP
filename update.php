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
    <div class="d-flex vh-100 bg-dark justify-content-center align-items-center">
        <div class="w-50 bg-white rounded p-3">
            <form  method="post">
                    <h2>Update User</h2>
                    <div class="form-group">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $product['Name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control " value="<?php echo $product['Price'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" value="<?php echo $product['Description'] ?>">
                    </div>
                    <div class="mt-3">
                        <input  class="btn btn-success" type="submit" value="Update"/>
                        <a href="./" class="btn btn-primary">Back</a>
                    </div>
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            $name = $_POST["name"];
                            $price = $_POST["price"];
                            $description = $_POST["description"];
                            $edit = $conn -> query("UPDATE `products` SET `Name`='$name',`Price`='$price',`Description`='$description' WHERE `ID` = $id");
                            header("location:index.php");
                        }
                    ?>
            </form>
        </div>
    </div>
</body>
</html>