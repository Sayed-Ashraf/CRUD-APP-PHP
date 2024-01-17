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
            <h2>Add Product</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <input type="text" name="desc" class="form-control">
                </div>
                <div class="mt-3">
                    <input type="submit" value="Add" class="btn btn-success">
                    <a href="./" class="btn btn-primary">Back</a>
                </div>
            </form>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $description = $_POST['desc'];
                    require("./connection.php");
                    $result = $conn -> query("INSERT INTO `products`(`Name`, `Price`, `Description`) VALUES ('$name','$price','$description')");
                    header("location:index.php");
                }
            ?>
        </div>
    </div>
</body>
</html>