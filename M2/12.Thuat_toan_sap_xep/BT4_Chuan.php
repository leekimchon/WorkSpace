<?php 
function swap(&$element_1, &$element_2){
    $temp = $element_1;
    $element_1 = $element_2;
    $element_2 = $temp;
}

class Country{
    public static array $arrCountry= [];

    public function __construct($name, $Medals){
        self::$arrCountry[$name] = $Medals;
    }
}

$country_1 = new Country('vietnam', 10);
$country_2 = new Country('Lao', 5);
$country_2 = new Country('Campuchia', 3);
$country_2 = new Country('China', 5);
$country_2 = new Country('ThaiLand', 4);

if(isset(Country::$arrCountry)){
    arsort(Country::$arrCountry);
    $i = 1;
    foreach(Country::$arrCountry as $name => $Medals){
        echo 'Top ' . $i . ': ' . $name . '<br>';
        echo 'Medals: ' . $Medals . '<br>';
        $i++;
    }
}
?>