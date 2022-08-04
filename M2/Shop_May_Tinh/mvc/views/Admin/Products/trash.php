<?php
include "./mvc/layouts/layout_admin/header.php";
include "./mvc/layouts/layout_admin/left_bar.php";
extract($data);
?>
<main>
    <div class="container-fluid px-4">
        <h3 style="display:inline-block;">Quản lý sản phẩm</h3>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="index.php?url=products/index">
                    <button class="nav-link <?php if ($_GET['url'] != 'products/trash') {echo 'active';} ?>" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Tất cả
                    </button>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="index.php?url=products/trash">
                    <button class="nav-link <?php if ($_GET['url'] == 'products/trash') { echo 'active';} ?>" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        Thùng rác
                    </button>
                </a>
            </li>
        </ul>
        <!--------------START Search-------------->
        <form method="POST">
            <div class="input-group" style="width: 25%;">
                <input class="form-control" type="text" name="key_search" placeholder="Nhập tên..." />
                <button type="submit" class="btn btn-primary" name="btn_search"><i class="bi bi-search"></i></button>
            </div>
        </form>
        <!--------------END Search-------------->
        
        <a href='index.php?url=products/add' style="float: right; margin-bottom: 12px;"><i class="bi bi-plus-circle-fill"></i>Thêm</a>
        <?php if (isset($_SESSION['flash_message'])){ ?>
            <?php 
            $message = $_SESSION['flash_message'];
            unset($_SESSION['flash_message']); 
            ?>
            <div class="alert alert-success"><i class="fas fa-check"></i> <?= $message ?></div>
        <?php }?>

        <!--------------START table-------------->
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Gốc</th>
                <th>Giá Bán</th>
                <th>Bảo Hành Xuất Xứ</th>
                <th>Ảnh</th>
                <th>Ngày Tạo</th>
                <th>Ngày Sửa</th>
                <th>Danh Mục</th>
                <th>Tùy Chỉnh</th>
            </tr>
            <?php for($i = 0; $i < count($trash); $i++){?>
                <tr>
                    <td><?= $trash[$i]->id ;?></td>
                    <td><?= $trash[$i]->name ;?></td>
                    <td><?= $trash[$i]->gia_goc ;?></td>
                    <td><?= $trash[$i]->gia_ban ;?></td>
                    <td><?= $trash[$i]->bao_hanh_xuat_xu ;?></td>
                    <td><img src="mvc/images/products/<?= $products[$i]->anh ;?>" class="img_products_admin"></td>
                    <td><?= $trash[$i]->ngay_tao ;?></td>   
                    <td><?= $trash[$i]->ngay_sua  ;?></td>   
                    <td><?= $trash[$i]->name_categories ;?></td>
                    <td>
                        <a href='index.php?url=products/un_delete/<?= $trash[$i]->id;?>'><i class="fas fa-trash-restore"></i>Khôi phục</a>
                        <a href='index.php?url=products/delete/<?= $trash[$i]->id;?>'><i class="bi bi-trash"></i>Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <!--------------END table-------------->
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";
