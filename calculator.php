<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form>
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator" >
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button name="submit" value="submit" type="submit">Calculate</button>
    </form>
<p>The answer is:</p>
    <?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "None":
                echo "Select method";
            break;
            case "Add":
                echo $result1 + $result2;
            break;
            case "Subtract":
                echo $result1 - $result2;
            break;
            case "Multiply":
                echo $result1 * $result2;
            break;
            case "Divide":
                echo $result1 / $result2;
            break;
        }
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