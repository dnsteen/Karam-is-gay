<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $x = 3;

    if ($x == 1) {
        echo "David is locked in!";
    } 
    elseif ($x == 2) {
        echo "David is kinda locked in.";
    }
    elseif ($x == 3) {
        echo "David is kinda locked in.";
    }
    elseif ($x == 4) {
        echo "David is kinda locked in.";
    }
    else {
        echo "David is not locked in!";
    }

?>
<br>
    <?php

    $x = 8;

    switch ($x) {
        case 1:
            echo "The answer is 1";
        break;
        case 2:
            echo "The answer is 2";
        break;
        case 3:
            echo "The answer is 3";
        break;
        case 4:
            echo "The answer is 4";
        break;
        default:
        echo "There is no answer";
    }

?>

<br>
<hr>
<br>
<a href="index.php">Home ---</a>
<a href="datatypes.php">Datatypes ---</a>
<a href="functions.php">Functions ---</a>
<a href="operators.php">Operators ---</a>
<a href="calculator.php">Calculator ---</a>
<a href="calender.php">Calender ---</a>
<a href="conditionals.php">Conditionals ---</a>
<a href="loops.php">Loops</a>

</body>
</html>