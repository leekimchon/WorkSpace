<?php
include "./mvc/layouts/layout_admin/header.php";
include "./mvc/layouts/layout_admin/left_bar.php";
?>
<main>
    <div class="container-fluid px-4">
        <h3 style="display:inline-block;">Quản lý loại tài khoản</h3>
        <a href='index.php?url=roles/add_role' style="float: right;"><i class="bi bi-plus-circle-fill"></i>Thêm</a>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
            <a href="index.php?url=roles/index"><button class="nav-link <?php if($_GET['url'] == 'roles/index'){echo 'active';}?>" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Tất cả</button></a>
            </li>
            <li class="nav-item" role="presentation">
            <a href="index.php?url=roles/trash_roles"><button class="nav-link <?php if($_GET['url'] == 'roles/trash_roles'){echo 'active';}?>" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Thùng rác</button></a>
            </li>
        </ul>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Tên loại tài khoản</th>
                <th>Tùy chỉnh</th>
            </tr>
            <?php
            for($i = 0; $i < count($data); $i++){
                $id_role = $data[$i]->id;
                echo "<tr>";
                echo "<td>".$id_role."</td>";
                echo "<td>".$data[$i]->name."</td>";
                echo "<td>"
                ."<a href='index.php?url=roles/un_delete_role/$id_role'><i class=\"fas fa-trash-restore\"></i>Khôi phục</a>" 
                ."<a href='index.php?url=roles/delete_role/$id_role'><i class=\"bi bi-trash\"></i>Xóa</a>"
                ."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";