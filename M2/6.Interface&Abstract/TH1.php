<?php 
abstract class Animal{
    abstract public function makeSound();
}
class Tiger extends Animal{
    public function makeSound(): string{
        return "Tiger: roarrrrr!";
    }
}
class Chicken extends Animal implements Edible{
    public function makeSound(){
        return "Chicken: cluck-cluck!";
    }
    public function howToEat(): string{
        return "could be fried";
    }
}
interface Edible{
    public function howToEat();
}
abstract class Fruit implements Edible{
}
class Apple extends Fruit{
    public function howToEat(): string
    {
        return "Apple could be slided";
    }
}
class Orange extends Fruit{

    public function howToEat(): string
    {
        return "Orange could be juiced";
    }
}
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br>';
    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . ' '.'<br>';
    }
}
$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br>';
}
?>