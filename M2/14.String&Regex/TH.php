<?php
$stringTest = 'adkrngkje';
$pattern = '/^[A-Z]/';
if(preg_match($pattern, $stringTest)){
    echo 'ký tự đầu là ký tự in hoa';
}else{
    echo 'ký tự đầu không là ký tự in hoa';
}
?>