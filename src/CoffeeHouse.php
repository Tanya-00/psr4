<?php
namespace CoffeeHouse;

class CoffeeHouse extends Coffee {
    private array $Menu;

    public function __construct()
    {
        echo 'Welcome to our coffee shop!', PHP_EOL;
    }

    public function addCoffee(Coffee $coffee) {
        $this->Menu=$coffee;
    }
}
?>