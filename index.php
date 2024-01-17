<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <title>CRUD APP</title>
</head>
<body>
    <?php
        require("./connection.php");
        $query = "SELECT * FROM `products`";
        $result = $conn -> query($query);
        $products = $result -> fetch_all(MYSQLI_ASSOC); 
    ?>
    <div class="container-fluid bg-dark  vh-100 d-flex justify-content-center align-items-center">
        <div class="w-50 bg-white rounded p-3">
            <h2>Product List</h2>
            <div class="d-flex justify-content-end">
                <a href="./add.php" class="btn btn-primary">Create +</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($products as $product){
                            echo "<tr>";
                            $id = $product['ID'];
                            foreach($product as $key => $val){
                                if($key !== "ID") echo "<td>$val</td>";
                            }
                                echo "<td>
                                        <a href='./read.php?id=$id' class='btn btn-info'>Read</a>
                                        <a href='./update.php?id=$id'class='btn btn-success'>Edit</a>
                                        <a href='./delete.php?id=$id'class='btn btn-danger'>Delete</a>
                                    </td>";
                                echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="./bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>