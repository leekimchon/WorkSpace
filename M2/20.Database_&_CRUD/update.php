<?php
include 'db.php';
include 'index.php';
$id = $_GET['id'];
if(isset($_POST['update'])){
    $new_ma_loai_sach = $_POST['new_ma_loai_sach'];
    $new_loai_sach = $_POST['new_loai_sach'];
    $sql = "UPDATE loai_sach SET MA_LOAI_SACH = $new_ma_loai_sach, LOAI_SACH = '$new_loai_sach' WHERE MA_LOAI_SACH = $id";
    $conn->exec($sql);
    header('location:index.php');
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
    <form method='POST'>
        Mã loại sách <input type="text" name="new_ma_loai_sach"><br>
        Loại sách <input type="text" name="new_loai_sach"><br>
        <input type="submit" name="update" value="Sửa">
    </form>
</body>
</html>