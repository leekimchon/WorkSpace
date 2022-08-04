<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nhap = $_REQUEST['nhap'];
    $tong = 0;
    $i = 2;
    $all = '';
    while ($tong < $nhap) {
        $sum = 0;
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $sum++;
            }
        }
        if ($sum == 0) {
            $all .= $i . ' la so nguyen to' . '<br>';
            $tong++;
        }
        $i++;
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
        chú mi ưng in mấy số nguyên tố đầu tiên
        <input type="text" name="nhap">
        <input type="submit" value="In">
    </form>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $all;
}
?>