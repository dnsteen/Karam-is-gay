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
<main>
        <div class="wrapper-main">
            <section calss="section-default">
                <?php
                if (isset($_SESSION['userId'])) {
                    echo '<h6 class="login-satus">You are logged in!</h6>';
                }
                else {
                    echo '<h6 class="login-satus">You are logged out!</h6>';
                }
                ?>
            </section>
        </div>
    </main>
    
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>