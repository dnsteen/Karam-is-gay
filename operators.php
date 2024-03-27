<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    $y = 20;

    if ($x == $y xor 1 == 1) {
        echo "True";
    }

?>
</body>
</html>