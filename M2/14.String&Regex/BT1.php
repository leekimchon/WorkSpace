<?php
$email = 'leekimchon01@gmail.com';
$pattern = '/^[0-9a-zA-Z]{6,12}\@gmail\.com$/';
if(preg_match($pattern, $email)){
    echo 'Next';
}else{
    echo 'Stop!!!';
}
?>