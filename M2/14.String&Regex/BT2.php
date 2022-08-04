<?php
function checkAccount($account){
    if(strlen($account) < 6){
        echo 'độ dài phải >= 6 ký tự';
        die();
    }
    $sum = 0;
    for($i = 0; $i < strlen($account); $i++){
        $key = $account[$i];
        if(($key >= 0 && $key <= 9) || ($key >= 'a' && $key <= 'z') || $key == '_'){
            $sum ++;
        }else{
            echo 'Không được có ký tự đặc biệt';
        }
    }

    if($sum == strlen($account)){
        echo 'Next';
    }
}
$account = 'hsddjkf43785dk_a;a';
$pattern = '/[0-9a-z_]{6,}$/';
// checkAccount($account);
if(preg_match($pattern, $account)){
    echo 'next';
}else{
    echo 'error Syntax';
}
?>