<?php
include "./mvc/layouts/layout_admin/header.php";
include "./mvc/layouts/layout_admin/left_bar.php";
extract($data);
// echo "<pre>";
// var_dump($categories_trash);die;
// echo "<pre>";
// print_r($categories);die;
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

        <!--------------START table-------------->
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Tùy Chỉnh</th>
            </tr>
            <?php for($i = 0; $i < count($categories_trash); $i++){?>
                <tr>
                    <td><?= $categories_trash[$i]->id ;?></td>
                    <td><?= $categories_trash[$i]->name ;?></td>
                    <td>
                        <a href='index.php?url=categories/un_delete_category/<?= $categories_trash[$i]->id;?>'><i class="fas fa-trash-restore"></i>Khôi phục</a>
                        <a href='index.php?url=categories/delete_category/<?= $categories_trash[$i]->id;?>'><i class="bi bi-trash"></i>Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <!--------------END table-------------->
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";
