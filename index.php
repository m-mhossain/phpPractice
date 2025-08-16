<?php
// abstract class Car {
//     public $name;
//     public function __construct($name) {
//         $this->name = $name;
//     }
//     abstract public function intro() : string;
// }

// class Audi extends Car {
//     public function intro(): string {
//         return "Choose German quality! I'm an $this->name!";
//     }
// }
// class Volvo extends Car {
//     public function intro(): string {
//         return "Proud to be Swedish! I'm a $this->name!";
//     }
// }

// class Citroen extends Car {
//     public function intro(): string {
//         return "French extravagance! I'm a $this->name";
//     }
// }
// $audi = new Audi("Audi");
// echo $audi->intro();
// echo PHP_EOL;
// $volvo = new Volvo("Volvo");
// echo $volvo->intro();
// echo PHP_EOL;
// $citroen = new Citroen("Citroen");
// echo $citroen->intro();

// abstract class ParentClass {
//     abstract protected function prefixName($name);
// }

// class ChildClass extends ParentClass {
//     public function prefixName($name) {
//         if ($name == "John Doe") {
//             $prefix = "Mr. ";
//         }elseif ($name == "Jane Doe") {
//             $prefix = "Mrs. ";
//         }else {
//             $prefix = "";
//         }
//         return "{$prefix} {$name}";
//     }
// }
// $class = new ChildClass();
// echo $class->prefixName("John Doe");
// echo PHP_EOL;
// echo $class->prefixName("Jane Doe");

abstract class ParentClass {
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    public function prefixName($name, $separator = ".", $greet = "Dear") {
        if ($name == "John Doe") {
            $prefix = "Mr";
        }elseif ($name == "Jane Doe") {
            $prefix = "Mrs";
        }else {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}
$class = new ChildClass();
echo $class->prefixName("John Doe");
echo PHP_EOL;
echo $class->prefixName("Jane Doe");