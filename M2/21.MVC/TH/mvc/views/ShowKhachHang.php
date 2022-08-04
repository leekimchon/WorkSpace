<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
            <?php foreach($data as $key => $row):?>
                <tr>
                    <td><?php echo $row->ID; ?></td>
                    <td><?php echo $row->NAME; ?></td>
                    <td><?php echo $row->EMAIL; ?></td>
                    <td><?php echo $row->ADDRESS; ?></td>
                    <td><a href="http://localhost:3000/BaiTapModule2/21.MVC/TH/index.php?url=home/update/<?php echo $row->ID; ?>">Sửa</a></td>
                    <td><a href="http://localhost:3000/BaiTapModule2/21.MVC/TH/index.php?url=home/delete/<?php echo $row->ID; ?>">Xóa</a></td>
                </tr>
            <?php endforeach;?>
        </table>
    </form>
    <a href="http://localhost:3000/BaiTapModule2/21.MVC/TH/index.php?url=home/add">Thêm</a>
</body>
</html>