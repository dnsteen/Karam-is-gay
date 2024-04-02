<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Loop

    //While loop
    $x = 1;
    while ($x <= 5) {
        echo "hi there<br>";
        $x++;
    }

?>
<hr>
    <?php
    //Do while loop
    $x = 1;
    do {
        echo "hi there<br>";
        $x++;
    }
    while ($x <= 5)

?>
<hr>
    <?php
    //For loop
    for ($x = 0; $x <= 10; $x++) {
        echo "hi<br>";
    }

?>
<hr>
    <?php
    //Foreach loop
    $array = array("David", "Karam", "Chad");

    foreach ($array as $loopdata) {
        echo "My name is ".$loopdata."<br>";
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