<?php
include "./mvc/layouts/layout_admin/header.php";
include "./mvc/layouts/layout_admin/left_bar.php";
extract($data);
?>
<main>
    <div class="container-fluid px-4">
        <form method="POST">
            <h3>Sửa danh mục</h3>
            <div class="mb-3" style="margin-bottom: 0px !important;">
                <label for="exampleInputNamecategory" class="form-label">Tên danh mục</label>
                <input name="update_name_category" type="text" class="form-control" id="exampleInputNamecategory" value="<?= $name_category_old?>">
            </div>
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?= $name_category_err?></span>
            <button name="update_category" type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";