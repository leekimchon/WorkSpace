<?php 
    include './header.php'
?>
    <?php
        if(isset($_GET['id'])):
    ?>
            <form method="POST">
                Mã loại sách
                <input type="text" name="sua_ma_loai_sach" ><br>
                Loại sách
                <input type="text" name="sua_loai_sach"><br>
                <input type="submit" name="update" value="Sửa">
            </form>
    <?php
        $sua_ma_sach = $_GET['id'];
        if(isset($_POST['update'])){
            $ma_sach = $_REQUEST['sua_ma_loai_sach'];
            $loai_sach = $_REQUEST['sua_loai_sach'];
            $query = "UPDATE loai_sach SET MA_LOAI_SACH = '$ma_sach', LOAI_SACH = '$loai_sach' WHERE MA_LOAI_SACH = $sua_ma_sach";
            mysqli_query($conn, $query);
            header('location:index.php');
        }
        endif;
    ?>
<?php 
    include './footer.php'
?>
    