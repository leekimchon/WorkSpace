<?php 
    $conn = new mysqli('localhost', 'root','', 'bt1') or die('kết nối thất bại');
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
        .edit_btn {
            text-decoration: none;
            padding: 2px 5px;
            background: #2E8B57;
            color: white;
            border-radius: 3px;
        }

        .del_btn {
            text-decoration: none;
            padding: 2px 5px;
            color: white;
            border-radius: 3px;
            background: #800000;
        }
    </style>
</head>
<body>
    <h2>QUẢN LÝ LOẠI SÁCH</h2>
    <form method="POST">
        <table>
            <tr>
                <th>MA_LOAI_SACH</th>
                <th>LOAI_SACH</th>
            </tr>
            <?php
                $query = 'SELECT * FROM loai_sach';
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $ma_sach = $row['MA_LOAI_SACH'];
                        $loai_sach = $row['LOAI_SACH'];
                        echo '<tr>';
                        echo '<td>' . $ma_sach;
                        echo '</td>';
                        echo '<td>' . $loai_sach;
                        echo '</td>';
                        echo '<td>' 
                        . "<a class='edit_btn' href='delete.php? id=$ma_sach' onclick='return confirm(\"Are you sure?\")'>Xóa</a>"
                        . "<a class='del_btn' href='update.php? id=$ma_sach'>Sửa</a>";
                        echo '</td>';
                        echo '</tr>';
                    }
                }else{
                    echo 'chưa có dữ liệu';
                }
            ?>
        </table>
    </form>