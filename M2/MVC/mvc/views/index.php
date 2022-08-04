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
        <div class="col-md-12 text-center">
            <h3>Danh sách mặt hàng</h3>
        </div>
        <div class="col-md-6">
            <form method="GET">
                <div class="input-group" style="width: 50%;">
                    <input type="hidden" name="url" value="home/search/">
                    Nhập tên hàng: <input class="form-control" type="text" name="key_search" placeholder="Nhập tên..." />
                    <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
        <div class="col-md-6 text-end">
            <a href="?url=home/add" class="btn btn-primary float-right m-2 ">Thêm mặt hàng</a>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <th>#</th>
                <th>Tên hàng</th>
                <th>Loại hàng</th>
                <th>Tùy chỉnh</th>
                <?php for($i = 0; $i < count($products); $i++){?>
                    <tr>
                        <td><?= $i + 1;?></td>
                        <td><?= $products[$i]->name?></td>
                        <td><?= $products[$i]->categories_name?></td>
                        <td>
                            <a href="?url=home/update/<?= $products[$i]->id?>" class="btn btn-primary">Sửa</a>
                            <a href="?url=home/delete/<?= $products[$i]->id?>" class="btn btn-danger">Xóa</a>    
                        </td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>