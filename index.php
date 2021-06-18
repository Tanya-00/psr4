<?php
function customAutoload(string $className) {
    $path=str_repeat('CoffeeHouse\\', DIRECTORY_SEPARATOR, $className);
    require_once __DIR__."/src/$path.php";
}
spl_autoload_register('customAutoload');
$CoffeeHouse=new \CoffeeHouse\CoffeeHouse();
$Latte=new \CoffeeHouse\Latte(150);
$Americano=new \CoffeeHouse\Americano(125);
$Glaze=new \CoffeeHouse\Glaze(200);
?>