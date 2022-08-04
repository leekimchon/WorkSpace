<?php 
    $conn = new mysqli('localhost', 'root','', 'bt1') or die('kết nối thất bại');
    if(isset($_GET['id'])){
        $ma_sach = $_GET['id'];
        $query = "DELETE FROM loai_sach WHERE MA_LOAI_SACH = $ma_sach";
        mysqli_query($conn, $query);
        header('location:index.php');
    }
?>
