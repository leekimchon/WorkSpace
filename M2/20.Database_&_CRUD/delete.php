<?php
include 'db.php';
// if(isset($_GET['id'])){
//     $id = $_GET['id'];
// }
$id = $_GET['id'];
$sql = "DELETE FROM loai_sach WHERE MA_LOAI_SACH = $id";
$conn->exec($sql);
header('location:index.php');
?>