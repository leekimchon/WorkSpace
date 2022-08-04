<!-- <?php
        // if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        //     $_REQUEST['chon1'] = $chon1;
        //     $_REQUEST['chon2'] = $chon2;
        // }
        ?> -->
<?php
$chon1 = 'USD';
$chon2 = 'VND';
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';
    $show;
    $nhap = $_REQUEST['nhap'];
    $chon1 = $_REQUEST['chon1'];
    $chon2 = $_REQUEST['chon2'];
    if (empty($_REQUEST['nhap'])) {
        $show = 'chưa nhập tiền cha ơi';
    } elseif ($chon1 == 'VND' && $chon2 == 'USD') {
        $result = $nhap / 23000;
        $show = $nhap . 'VND = ' . $result . 'USD';
    } elseif ($chon1 == 'USD' && $chon2 == 'VND') {
        $result = $nhap * 23000;
        $show = $nhap . 'USD = ' . $result . 'VND';
    } else {
        $show = $nhap . $chon1 . ' = ' . $nhap . $chon1;
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
        <input type="text" name="nhap">
        <!-- required='' -->
        <select name="chon1">
            <option <?= ($chon1 == 'USD') ? 'selected' : ''; ?>>USD</option>
            <option <?= ($chon1 == 'VND') ? 'selected' : ''; ?>>VND</option>
        </select>
        Sang
        <select name="chon2">
            <option <?= ($chon2 == 'USD') ? 'selected' : ''; ?>>USD</option>
            <option <?= ($chon2 == 'VND') ? 'selected' : ''; ?>>VND</option>
        </select>
        <input type="submit" value="Change"><br>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    echo $show;
}
?>