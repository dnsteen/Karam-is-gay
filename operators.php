<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<?php

include 'includes/header.php'

?>

    <?php

    //Arithmetic Operators #8
    echo 5**5;

?>
<hr>
    <?php

    //Assignmet Operators #9
    $x = 100;
    $x /= 20;



    echo $x;

?>
<hr>
    <?php

    //Comparison Operators #10
    $x = "10";
    $y = 10;

    if ($x === $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }

?>
<hr>
    <?php

    //Increment/Decrement Operators #11
    $x = 10;
    echo $x--;
    echo $x;

?>
<hr>
    <?php

    //Logical Operators #12
    $x = 20;
    $y = 60;

    if ($x == $y xor 1 == 1) {
        echo "True";
    }

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>