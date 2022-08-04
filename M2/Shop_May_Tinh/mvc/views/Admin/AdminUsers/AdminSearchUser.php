<?php
include "./mvc/layouts/layout_admin/header.php";
include "./mvc/layouts/layout_admin/left_bar.php";
extract($data);
// echo "<pre>";
// print_r($users);die;
?>
<main>
    <div class="container-fluid px-4">
        <h3 style="display:inline-block;">Quản lý tài khoản</h3>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="index.php?url=users/index">
                    <button class="nav-link <?php if ($_GET['url'] != 'users/trash_users') {echo 'active';} ?>" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Tất cả
                    </button>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="index.php?url=users/trash_users">
                    <button class="nav-link <?php if ($_GET['url'] == 'users/trash_users') { echo 'active';} ?>" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
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

        <!--------------START mục trên mỗi trang-------------->
        <form method="POST" style="margin: 8px 0px">
            <div class="dataTable-dropdown">
                <label>
                    <select class="dataTable-selector" name="limit_page_user" onchange="this.form.submit()">
                        <option value="5" <?php if( isset($_SESSION["limit_page_user"]) && $_SESSION["limit_page_user"] == 5){echo "selected";} ?>>5</option>
                        <option value="10" <?php if( isset($_SESSION["limit_page_user"]) && $_SESSION["limit_page_user"] == 10){echo "selected";}else if(!isset($_SESSION["limit_page_user"])){echo "selected";} ?>>10</option>
                        <option value="15" <?php if( isset($_SESSION["limit_page_user"]) && $_SESSION["limit_page_user"] == 15){echo "selected";} ?>>15</option>
                        <option value="20" <?php if( isset($_SESSION["limit_page_user"]) && $_SESSION["limit_page_user"] == 20){echo "selected";} ?>>20</option>
                        <option value="25" <?php if( isset($_SESSION["limit_page_user"]) && $_SESSION["limit_page_user"] == 25){echo "selected";} ?>>25</option>
                    </select> 
                    mục trên mỗi trang
                </label>
            </div>
        </form>
        <!--------------END mục trên mỗi trang-------------->
        
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
                <th>HỌ VÀ TÊN</th>
                <th>EMAIL</th>
                <th>SỐ ĐIỆN THOẠI</th>
                <th>ĐỊA CHỈ</th>
                <th>LOẠI TÀI KHOẢN</th>
                <th>TÙY CHỈNH</th>
            </tr>
            <?php for($i = 0; $i < count($users); $i++){?>
                <tr>
                    <td><?= $users[$i]->id ;?></td>
                    <td><?= $users[$i]->full_name ;?></td>
                    <td><?= $users[$i]->email ;?></td>
                    <td><?= $users[$i]->phone_number ;?></td>
                    <td><?= $users[$i]->address ;?></td>
                    <td><?= $users[$i]->role_name ;?></td>
                    <td>
                        <a href='index.php?url=users/update_user/<?= $users[$i]->id;?>'><i class="bi bi-pencil-square"></i>Sửa</a>
                        <a href='index.php?url=users/delete_user/<?= $users[$i]->id;?>'><i class="bi bi-trash"></i>Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <!--------------END table-------------->

        <!--------------START PHÂN TRANG-------------->
        <nav aria-label="Page navigation example" style="float: right;">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <!-- <li class="page-item active"><a class="page-link" href="index.php?url=admin/roles/1">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                <?php for($i = 1; $i <= $total_page; $i++){?>
                    <li class="page-item <?php if($_GET["url"] == "users/index/$i" || ($_GET["url"] == "users/index" && $i == 1)){ echo "active";}?>">
                        <a class="page-link" href="index.php?url=users/index/<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php }?>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!--------------END PHÂN TRANG-------------->
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";
