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
            <h3>Kết quả tìm kiếm măt hàng</h3>
        </div>
        <div class="col-md-12 text-end">
            <a href="?url=home/index" class="btn btn-primary float-right m-2 ">Xem danh sách mặt hàng</a>
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
                            <a href="" class="btn btn-primary">Sửa</a>
                            <a href="" class="btn btn-danger">Xóa</a>    
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