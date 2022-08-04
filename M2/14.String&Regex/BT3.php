<?php
$className = 'C0318G';
$pattern = '/^[ACP][0-9]{4}[GHIKLM]$/';
if(preg_match($pattern, $className)){
    echo 'Pass';
}else{
    echo 'Fail';
}
?>