<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>

    <?php
    if (isset($msg)) {
        echo $msg . '<br/>';
    }
    if (isset($status)) {
        echo $status . '<br/>';
    }
    ?>

    <h2>Registration Form</h2>
    <form action="<?= base_url("Register/saveData") ?>" method="POST">

        <label for="name">Name :</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone :</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <input type="submit" value="Register">
        <a href="<?= base_url("register/fetchData") ?>">
            <button type="button">View Records</button>
        </a>

    </form>

</body>

</html>