<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .actions {
            display: flex;
            justify-content: space-around;
        }

        .edit-link,
        .delete-link {
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #007bff;
            border-radius: 3px;
            color: #007bff;
        }

        .edit-link:hover,
        .delete-link:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
    <h1>Product List</h1>
    <a href="create.php">Add New Product</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include database connection
            include('config.php');

            // Fetch products from the database
            $result = mysqli_query($conn, "SELECT * FROM product_list");

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>$" . $row['price'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
                echo "<td>" . $row['updated_at'] . "</td>";
                echo "<td class='actions'>";
                echo "<a class='edit-link' href='edit.php?id=" . $row['id'] . "'>Edit</a>";
                echo "<a class='delete-link' href='delete.php?id=" . $row['id'] . "'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>