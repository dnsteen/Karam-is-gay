<?php

include 'includes/header.php'

?>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>