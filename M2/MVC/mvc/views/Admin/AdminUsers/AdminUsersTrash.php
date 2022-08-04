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
                    <button class="nav-link <?php if ($_GET['url'] == 'users/index') {echo 'active';} ?>" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
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

        <!--------------START table-------------->
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Họ Và Tên</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
                <th>Loại Tài Khoản</th>
                <th>Tùy Chỉnh</th>
            </tr>
            <?php for($i = 0; $i < count($users_trash); $i++){?>
                <tr>
                    <td><?= $users_trash[$i]->id ;?></td>
                    <td><?= $users_trash[$i]->full_name ;?></td>
                    <td><?= $users_trash[$i]->email ;?></td>
                    <td><?= $users_trash[$i]->phone_number ;?></td>
                    <td><?= $users_trash[$i]->address ;?></td>
                    <td><?= $users_trash[$i]->role_name ;?></td>
                    <td>
                        <a href='index.php?url=users/un_delete_user/<?= $users_trash[$i]->id;?>'><i class="fas fa-trash-restore"></i>Khôi phục</a>
                        <a href='index.php?url=users/delete_user/<?= $users_trash[$i]->id;?>'><i class="bi bi-trash"></i>Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <!--------------END table-------------->
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";
