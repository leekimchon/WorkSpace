<?php
class customException extends Exception{
    public function customMsg(){
        return 'Lỗi :' . $this->getMessage() . ' ở file ' . $this->getFile();
    }
}
$a = 4;
$b = 0;
$c = null;
try{
    if($b == 0){
        throw new customException ('số chia phải khác 0', 1);
    }else{
    echo $a/$b;
    }
}catch (customException $e){
echo $e->customMsg() . '<br>';
}
