<?php 
    include './header.php';
?>
    <form method="POST">
        Mã loại sách
        <input type="text" name="ma_loai_sach" ><br>
        Loại sách
        <input type="text" name="loai_sach"><br>
        <input type="submit" name="add" value="Add">
    </form>
    <?php
        if(isset($_POST['add'])){
            $ma_sach = $_REQUEST['ma_loai_sach'];
            $loai_sach = $_REQUEST['loai_sach'];
            $query = "INSERT INTO loai_sach VALUES ('$ma_sach', '$loai_sach')";
            mysqli_query($conn, $query);
            header('location:index.php');
        }
    ?>
<?php 
    include './footer.php';
?>