<?php
include "./mvc/layouts/layout_admin/header.php";
include "./mvc/layouts/layout_admin/left_bar.php";
extract($data);
// echo "<pre>";
// print_r($search_role);die;
?>
<main>
    <div class="container-fluid px-4">
        <h3 style="display:inline-block;">Quản lý danh mục</h3>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="index.php?url=categories/index">
                    <button class="nav-link <?php if ($_GET['url'] != 'categories/trash_categories') {echo 'active';} ?>" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Tất cả
                    </button>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="index.php?url=categories/trash_categories">
                    <button class="nav-link <?php if ($_GET['url'] == 'categories/trash_categories') { echo 'active';} ?>" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        Thùng rác
                    </button>
                </a>
            </li>
        </ul>
        <!--------------START Search-------------->
        <form method="GET">
            <div class="input-group" style="width: 25%;">
                <input type="hidden" name="url" value="categories/search/">
                <input class="form-control" type="text" name="key_search" placeholder="Nhập tên..." />
                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
            </div>
        </form>
        <!--------------END Search-------------->
        
        <!--------------START table-------------->
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Tùy Chỉnh</th>
            </tr>
            <?php for($i = 0; $i < count($search_role); $i++){?>
                <tr>
                    <td><?= $search_role[$i]->id ;?></td>
                    <td><?= $search_role[$i]->name ;?></td>
                    <td>
                        <a href='index.php?url=categories/update_category/<?= $search_role[$i]->id;?>'><i class="bi bi-pencil-square"></i>Sửa</a>
                        <a href='index.php?url=categories/delete_category/<?= $search_role[$i]->id;?>'><i class="bi bi-trash"></i>Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <!--------------END table-------------->
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";
