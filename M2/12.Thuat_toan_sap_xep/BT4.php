<?php 
function swap(&$element_1, &$element_2){
    $temp = $element_1;
    $element_1 = $element_2;
    $element_2 = $temp;
}

class Country{
    // public string $name;
    // public int $Medals;
    // public static array $arrName = [];
    // public static array $arrMedals = [];
    public static array $arrCountry= [];

    public function __construct($name, $Medals){
        // $this->name = $name;
        // $this->Medals = $Medals;
        // array_push(self::$arrName, $name);
        // array_push(self::$arrMedals, $Medals);

        self::$arrCountry[$name] = $Medals;
    }
}

$country_1 = new Country('vietnam', 10);
$country_2 = new Country('Lao', 5);
$country_2 = new Country('Campuchia', 3);
$country_2 = new Country('China', 5);
$country_2 = new Country('ThaiLand', 4);
if(isset(Country::$arrCountry)){
    // for($i = 0; $i < count($arrCountry); $i++){
    //     for($j = $i + 1; $j < count($arrCountry); $j++){
    //         if($arrCountry[$j] > $arrCountry[$i]){
    //             swap($arrCountry[$j], $arrCountry[$i]);
    //         }
    //     }
    // }

    // for($i = 0; $i < count(Country::$arrMedals); $i++){
    //     for($j = $i + 1; $j < count(Country::$arrMedals); $j++){
    //         if(Country::$arrMedals[$j] > Country::$arrMedals[$i]){
    //             swap(Country::$arrMedals[$j], Country::$arrMedals[$i]);
    //             swap(Country::$arrName[$j], Country::$arrName[$i]);
    //         }
    //     }
    // }

    // for($i = 0; $i < count(Country::$arrMedals); $i++){
    //     echo 'Top ' . ($i+1)  . ': ' . Country::$arrName[$i] . '<br>';
    //     echo 'Medals: ' . Country::$arrMedals[$i] . '<br>';
    // }

    arsort(Country::$arrCountry);
    $i = 1;
    foreach(Country::$arrCountry as $name => $Medals){
        echo 'Top ' . $i . ': ' . $name . '<br>';
        echo 'Medals: ' . $Medals . '<br>';
        $i++;
    }
}
// print_r($arrCountry);
?>