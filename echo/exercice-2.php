<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

$number1 = 42;
$number2 = 33;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Exercice 2 echo</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php if($number1 % 2 === 0) { ?>
        <p class="red">
            <?= $number1 ?>
        </p>
    <?php }
    else {
    ?>
        <p class="blue">
            <?= $number1 ?>
        </p>
    <?php
    }
    ?>
    <?php if($number2 % 2 === 0) { ?>
        <p class="red">
            <?= $number2 ?>
        </p>
    <?php }
    else {
        ?>
        <p class="blue">
            <?= $number2 ?>
        </p>
        <?php
    }
    ?>
</body>
</html>

