<?php
include "./mvc/layouts/layout_admin/header.php";
include "./mvc/layouts/layout_admin/left_bar.php";
extract($data)
?>
<main>
    <div class="container-fluid px-4">
        <form method="POST">
            <h3>Thêm Danh mục</h3>
            <div class="mb-3" style="margin-bottom: 0px !important;">
                <label for="exampleInputNameRole" class="form-label">Tên danh mục</label>
                <input name="add_name_categoty" type="text" class="form-control" id="exampleInputNameRole">
            </div>
            <span class="err" style="display: block; margin-bottom: 1rem !important;"><?= $name_category_err ?></span>
            <button name="add_categoty" type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</main>
<?php
include "./mvc/layouts/layout_admin/footer.php";