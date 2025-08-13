<?php
abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
}

class Audi extends Car {
    public function intro(): string {
        return "Choose German quality! I'm an $this->name!";
    }
}
class Volvo extends Car {
    public function intro(): string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car {
    public function intro(): string {
        return "French extravagance! I'm a $this->name";
    }
}
$audi = new Audi("Audi");
echo $audi->intro();
echo PHP_EOL;
$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo PHP_EOL;
$citroen = new Citroen("Citroen");
echo $citroen->intro();