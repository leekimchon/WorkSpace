<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $money = $_REQUEST['money'];
    $lai = $_REQUEST['lai'];
    $nam = $_REQUEST['namdautu'];
    // $future = $nam * ($money + ($money * $lai));
    // echo 'Future: ' . $future;
    $future = '';
    for ($i = 1; $i <= $nam; $i++) {
        $future = $money + ($money * $lai);
        $money = $future;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        Inventment Amount <input type="text" name="money"><br>
        Yearly Interest Rate <input type="text" name="lai"><br>
        Number of Years <input type="text" name="namdautu"><br>
        <input type="submit" value="check">
    </form>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'Future: ' . $future;
}
?>