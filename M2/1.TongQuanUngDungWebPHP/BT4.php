<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="./BT4.php" method="POST">
            <h3>Simple Calculator</h3>
            First Operand: <input type="text" name="first"><br>
            Operator: <select name="operator">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select><br>
            Second Operand: <input type="text" name="second"><br>
            <input type="submit">
        </form>
    </div>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first = $_REQUEST['first'];
    $second = $_REQUEST['second'];
    $operator = $_REQUEST['operator'];
    if ($operator == '+') {
        echo $first + $second;
    } elseif ($operator == '-') {
        echo $first - $second;
    } elseif ($operator == '*') {
        echo $first * $second;
    } elseif ($operator == '/') {
        echo $first / $second;
    }
    // echo '$first  $operator $second';
}