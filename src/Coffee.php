<?php
namespace CoffeeHouse;

class  Coffee {
    private int $price;

    public function __construct(int $price)
    {
        $this->price=$price;
    }

    public function addCream() {
        $this->price+15;
    }
}
?>