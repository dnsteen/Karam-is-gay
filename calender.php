<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php

    $dayofweek = date("w");

    switch ($dayofweek) {
        case 1:
            echo "<p>It is Monday!</p>";
        break;
        case 2:
            echo "<p>It is Tuesday!</p>";
        break;
        case 3:
            echo "<p>It is Wednesday!</p>";
        break;
        case 4:
            echo "<p>It is Thursday!</p>";
        break;
        case 5:
            echo "<p>It is Friday!</p>";
        break;
        case 6:
            echo "<p>It is Saturday!</p>";
        break;
        case 7:
            echo "<p>It is Sunday!</p>";
        break;
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
<a href="calender.php">Calender</a>

</body>
</html>