<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="calender.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php

include 'includes/header.php'

?>
<main>
        <div class="wrapper-main">
            <section class="section-default">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>