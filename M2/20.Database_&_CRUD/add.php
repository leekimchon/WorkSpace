<?php
include 'index.php';
include 'db.php';
if(isset($_POST['add'])){
    $new_ma_loai_sach = $_POST['new_ma_loai_sach'];
    $new_loai_sach = $_POST['new_loai_sach'];
    if(empty($new_ma_loai_sach)){
        $sql = "INSERT INTO loai_sach VALUES('', '$new_loai_sach')";
    }else{
        $sql = "INSERT INTO loai_sach VALUES($new_ma_loai_sach, '$new_loai_sach')";
    }
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
        <input type="submit" name="add" value="Thêm">
    </form>
</body>
</html>