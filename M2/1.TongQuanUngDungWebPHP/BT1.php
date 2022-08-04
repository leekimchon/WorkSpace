<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/BaiTapModule2/1.TongQuanUngDungWebPHP/BT1.php" method="POST">
        <input type="number" name="nhap">
        <input type="submit">
    </form>
    <?php
    function check($nhap, $arr)
    {
        if ($nhap >= 0 && $nhap <= 10) {
            for ($i = 0; $i <= 9; $i++) {
                if ($nhap == $i) {
                    echo $arr[$i];
                }
            }
        } elseif ($nhap > 20 && $nhap < 30) {
            for ($i = 1; $i <= 9; $i++) {
                if (($nhap - 20) == $i) {
                    echo 'Twenty ' . $arr[$i];
                }
            }
        } elseif ($nhap > 30 && $nhap < 40) {
            for ($i = 1; $i <= 9; $i++) {
                if (($nhap - 30) == $i) {
                    echo 'Thirty ' . $arr[$i];
                }
            }
        } elseif ($nhap > 40 && $nhap < 50) {
            for ($i = 1; $i <= 9; $i++) {
                if (($nhap - 40) == $i) {
                    echo 'Forty ' . $arr[$i];
                }
            }
        } elseif ($nhap > 50 && $nhap < 60) {
            for ($i = 1; $i <= 9; $i++) {
                if (($nhap - 50) == $i) {
                    echo 'Fifty ' . $arr[$i];
                }
            }
        } elseif ($nhap > 60 && $nhap < 70) {
            for ($i = 1; $i <= 9; $i++) {
                if (($nhap - 60) == $i) {
                    echo 'Sixty ' . $arr[$i];
                }
            }
        } elseif ($nhap > 70 && $nhap < 80) {
            for ($i = 1; $i <= 9; $i++) {
                if (($nhap - 70) == $i) {
                    echo 'Seventy ' . $arr[$i];
                }
            }
        } elseif ($nhap > 80 && $nhap < 90) {
            for ($i = 1; $i <= 9; $i++) {
                if (($nhap - 80) == $i) {
                    echo 'Eighty ' . $arr[$i];
                }
            }
        } elseif ($nhap > 90 && $nhap < 100) {
            for ($i = 1; $i <= 9; $i++) {
                if (($nhap - 90) == $i) {
                    echo 'Ninety ' . $arr[$i];
                }
            }
        }

        switch ($nhap) {
            case 11:
                echo 'Eleven';
                break;
            case 12:
                echo 'Twel';
                break;
            case 13:
                echo 'Thirteen ';
                break;
            case 14:
                echo 'Fourteen';
                break;
            case 15:
                echo 'Fifteen';
                break;
            case 16:
                echo 'Sixteen';
                break;
            case 17:
                echo 'Seventeen';
                break;
            case 18:
                echo 'Eighteen';
                break;
            case 19:
                echo 'Nineteen';
                break;
            case 10:
                echo 'Ten';
                break;
            case 20:
                echo 'Twenty';
                break;
            case 30:
                echo 'Thirty';
                break;
            case 40:
                echo 'Forty';
                break;
            case 50:
                echo 'Fifty';
                break;
            case 60:
                echo 'Sixty';
                break;
            case 70:
                echo 'Seventy';
                break;
            case 80:
                echo 'Eighty';
                break;
            case 90:
                echo 'Ninety';
                break;
        }
    }
    $arr = ['zero', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nhap = $_REQUEST['nhap'];
        // $nhap = (float)$nhap;  /// đổi kiểu $nhap sang kiểu number(float,int) 
        check($nhap, $arr);

        if ($nhap % 100 == 0) {
            echo $arr[$nhap / 100] . ' Hundred';
        }
        for ($i = 100; $i < 1000; $i += 100) {
            $j = $i + 100;
            if ($nhap > $i && $nhap < $j) {
                $nhap = $nhap % $i;
                echo $arr[$i / 100] . ' Hundred ';
                check($nhap, $arr);
            }
        }
    }
    ?>
</body>

</html>