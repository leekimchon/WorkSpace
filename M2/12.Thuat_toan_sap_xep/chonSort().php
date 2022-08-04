<?php
function chonSort(&$arr){
    $arrName = [];
    $arrMedals = [];

    foreach($arr as $name => $medal){
        array_push($arrName, $name);
        array_push($arrMedals, $medal);
    }

    for($i = 0; $i < count($arrMedals); $i++){
        for($j = $i + 1; $j < count($arrMedals); $j++){
            if($arrMedals[$j] > $arrMedals[$i]){
                $temp = $arrMedals[$j];
                $arrMedals[$j] = $arrMedals[$i];
                $arrMedals[$i] = $temp;

                $tem = $arrName[$j];
                $arrName[$j] = $arrName[$i];
                $arrName[$i] = $tem;
            }
        }
    }

    $arr = [];
    for($i = 0; $i < count($arrMedals); $i++){
        $arr[$arrName[$i]] = $arrMedals[$i];
    }

    return $arr;
}

// $arr = ['Vietnam' => 50, 'Lao' => 30, 'China' => 1, 'ThaiLan' => 3];

// chonSort($arr);
// echo '<pre>';
// print_r($arr);
