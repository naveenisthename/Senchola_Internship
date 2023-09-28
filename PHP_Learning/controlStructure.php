<?php

//Control Structures

$score = 96;

if ($score >= 95) {
    echo "A";
    if ($score > 95) {
        echo "+";
    }
} else if ($score >= 80) {
    echo "B";
} elseif ($score >= 80) {
    echo "C";
} elseif ($score >= 70) {
    echo "D";
} elseif ($score >= 60) {
    echo "E";
} else {
    echo "F";
}
echo '<br/>';
?>

<html>

<body>

    <?php $score = 90 ?>

    <?php if ($score >= 95) : ?>
        <strong> A </strong>
    <?php elseif ($score >= 80) : ?>
        <strong> B </strong>
    <?php elseif ($score >= 70) : ?>
        <strong> C </strong>
    <?php elseif ($score >= 60) : ?>
        <strong> D </strong>
    <?php elseif ($score >= 50) : ?>
        <strong> E </strong>
    <?php else : ?>
        <strong> F </strong>
    <?php endif  ?>

</body>

</html>