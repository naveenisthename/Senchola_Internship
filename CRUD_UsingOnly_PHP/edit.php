<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        a {
            text-decoration: none;
            font-weight: bold;
            color: #007bff;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>


<body>
    <h1>Edit Product</h1>
    <a href="index.php">Back to Product List</a>
    <?php
    include('config.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $result = mysqli_query($conn, "SELECT * FROM product_list WHERE id=$id");

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
    ?>
            <form method="post" action="edit_process.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="product_name">Product Name:</label>
                <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>" required><br>

                <label for="description">Description:</label>
                <textarea name="description"><?php echo $row['description']; ?></textarea><br>

                <label for="price">Price:</label>
                <input type="text" name="price" value="<?php echo $row['price']; ?>" required><br>

                <input type="submit" value="Update Product">
            </form>
    <?php
        } else {
            echo "Product not found.";
        }
    }
    ?>
</body>

</html>
