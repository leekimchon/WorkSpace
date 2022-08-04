<?php
include "./mvc/layouts/layout_admin/header.php";
include "./mvc/layouts/layout_admin/left_bar.php";
?>
<main>
    <div class="container-fluid px-4">
        <h3 style="display:inline-block;">Quản lý loại tài khoản</h3>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="index.php?url=roles/index"><button class="nav-link <?php if ($_GET['url'] == 'roles/index') {echo 'active'; } ?>" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Tất cả</button></a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="index.php?url=roles/trash_roles"><button class="nav-link <?php if ($_GET['url'] == 'roles/trash_roles') {echo 'active';} ?>" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Thùng rác</button></a>
            </li>
        </ul>
        <form method="GET">
            <div class="input-group" style="width: 25%;">
                <input type="hidden" name="url" value="roles/search_role/">
                <input class="form-control" type="text" name="key_search" placeholder="Nhập tên..." />
                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
            </div>
        </form>
        <a href='index.php?url=roles/add_role' style="float: right; margin-bottom: 12px;"><i class="bi bi-plus-circle-fill"></i>Thêm</a>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Tên loại tài khoản</th>
                <th>Tùy chỉnh</th>
            </tr>
            <?php
            if (empty($data)) {
                echo "<tr>";
                echo "<th>Không tìm thấy</th>";
                echo "</tr>";
            } else {
                for ($i = 0; $i < count($data); $i++) {
                    $id_role = $data[$i]->id;
                    echo "<tr>";
                    echo "<td>" . $id_role . "</td>";
                    echo "<td>" . $data[$i]->name . "</td>";
                    echo "<td>" 
                    ."<a href='#'><i class='bi bi-capslock-fill'></i>Cấp quyền</a>"
                    ."<a href='index.php?url=roles/update_role/$id_role'><i class=\"bi bi-pencil-square\"></i>Sửa</a>" 
                    ."<a href='index.php?url=roles/delete_role/$id_role'><i class=\"bi bi-trash\"></i>Xóa</a>" 
                    ."</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";
