<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
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