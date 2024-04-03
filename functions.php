<?php

include 'includes/header.php'

?>
    <?php

    echo str_replace("Michael","Karam","Hi Michael");

?>

<hr>

    <?php
    //Calc Function
    function newCalc($x) {
        $newnr = $x * 0.75;
        echo "Here is 75% of what you wrote: ".$newnr;
    }

    $x = 100;
    newCalc($x);

    echo "<br>";

    $a = 10;
    newCalc($a);

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>