<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MICHAEL SOFT</h1>

    <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>
    </form>

    <?php
    echo "Hi there ";
    print "Michael Soft" ;
?>
<br>
    <?php
    $name = $_GET['person'];
    echo $name." is a cool!";
?>
</body>
</html>