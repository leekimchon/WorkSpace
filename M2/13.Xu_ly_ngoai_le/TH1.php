<?php
class customException extends Exception{
    public function customMsg(){
        return 'Lỗi: Mẫu phải khác không; Lỗi ở dòng: ' . $this->getLine() . '; Lỗi ở file: ' . $this->getFile();
    }
}

$tu = 10;
$mau = 0;
$result;
try{
    if($mau == 0){
        throw new customException(); 
    }
    $result = $tu / $mau;
    echo "$tu / $mau = $result";
}
catch(customException $e){
    echo $e->customMsg();
}
?>