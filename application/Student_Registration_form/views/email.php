<!DOCTYPE html>
<html>

<head>
    <title>Welcome Email</title>
</head>

<body>
    <p>Hello ,</p>
    <p>Welcome to our website! We're glad to have you on board.</p>
    <p>Thank you for joining us.</p>
</body>

<?php
foreach ($segments as $s) {
    echo $s . '<br/>';
}

?>
<h2>Email send successfully!</h2>;

</html>