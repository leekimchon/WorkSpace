<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr:nth-child(even) {background: #CCC}
        tr:nth-child(odd) {background: #FFF}
        table, tr, th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th{
            padding: 0 10px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <table>
            <th>MA_LOAI_SACH</th>
            <th>LOAI_SACH</th>
            <?php
            $sql = "SELECT * FROM loai_sach";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $rows = $stmt->fetchAll();
            foreach($rows as $key => $row){
                echo '<tr>';
                    echo '<td>';
                    echo $row->MA_LOAI_SACH;
                    echo '</td>';

                    echo '<td>';
                    echo $row->LOAI_SACH;
                    echo '</td>';

                    echo '<td>';
                    echo "<a href='update.php?id=$row->MA_LOAI_SACH'>Sửa</a>";
                    echo '</td>';

                    echo '<td>';
                    echo "<a href='delete.php?id=$row->MA_LOAI_SACH' onclick = 'return confirm(\"muốn xóa không??\")'>Xóa</a>";
                    echo '</td>';
                echo '</tr>';
            }
            ?>
        </table>
        <a href="add.php">Thêm</a>
    </form>
</body>
</html>