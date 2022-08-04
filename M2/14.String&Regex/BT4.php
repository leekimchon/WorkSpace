<?php 
$phoneNumber = '(a8)-(22222222)';
$pattern = '/^\([0-9]{2}\)\-\([0-9]{10}\)$/';
if(preg_match($pattern, $phoneNumber)){
    echo 'Pass';
}else{
    echo 'Fail';
}
?>