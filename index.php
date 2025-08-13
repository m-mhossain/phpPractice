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

abstract class PaymentGateway {
    abstract public function connect();
    abstract public function pay($amount);
    abstract public function refund($transactionId);
    public function setCurrency($currency) {
        echo "Currency set to: $currency\n";
    };
}

class Paypal extends PaymentGateway {
    public function connect() {
        echo "Connecting to paypal API...\n";
    }
    public function pay($amount) {
        echo "Paid $amount USE via PayPal. \n";
    }
    public function refund($transactionId) {
        echo "Refund processed for transaction $transactionId via PayPal. \n";
    }
}
class Stripe extends PaymentGateway {
    public function connect() {
        echo "Connecting to Stripe API...\n";
    }
    public function pay($amount) {
        echo "Paid $amount USE via Stripe. \n";
    }
    public function refund($transactionId) {
        echo "Refund processed for transaction $transactionId via Stripe. \n";
    }
}

//using paypal
$paypal = new PayPal();
$paypal->connect();
$paypal->setCurrency("USD");
$paypal->pay(100);
$paypal->refund("TXN12345");

//using stripe
$stripe = new Stripe();
$stripe->connect();
$stripe->setCurrency("USD");
$stripe->pay(200);
$stripe->refund("TXN67890");