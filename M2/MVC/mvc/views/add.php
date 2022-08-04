<?php
extract($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m2">
            <h3>Thêm mặt hàng</h3>
        </div>
        <div class="col-md-12">
        <form method="POST">
            <fieldset>
                <div class="mb-3">
                <label class="form-label">Tên hàng</label>
                <input type="text" name="name_product" class="form-control">
                </div>
                <div class="mb-3">
                <label class="form-label">Loại hàng</label>
                <select class="form-select" name="category_id">
                <?php for($i = 0; $i < count($products); $i++){?>
                    <option value="<?= $products[$i]->id_category?>"><?= $products[$i]->categories_name?></option>
                <?php }?>
                </select>
                </div>
                <div class="mb-3">
                <label class="form-label">Giá</label>
                <input type="text" class="form-control" name="price">
                </div>
                <div class="mb-3">
                <label class="form-label">Số lượng</label>
                <input type="text" class="form-control" name="amount">
                </div>
                <div class="mb-3">
                <label class="form-label">Mô tả</label>
                <input type="text" class="form-control" name="describe">
                </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary" name="add">Nhập mặt hàng</button>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary" name="exit">Thoát</button>
                </div>
            </fieldset>
        </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>