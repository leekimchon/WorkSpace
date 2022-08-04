<?php 
    $name='';
    $arr=[
        'hello' => 'xin chào',
        'red' => 'đỏ',
        'yellow' => 'vàng'
    ];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_REQUEST['name'];
        $sum=0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POSt">
        <h2>Từ điển anh việt</h2>
        <input type="text" name="name" placeholder="Nhập từ cần tìm" value="<?php echo $name ?>">
        <input type="submit">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']=='POST'){
            foreach($arr as $key => $value){
                if($name==$key){
                    echo $name.': '.$value;
                    $sum++;
                }
            }
            if($sum==0){
                echo $name.' không tìm thấy';
            }
        }
    ?>
</body>
</html>