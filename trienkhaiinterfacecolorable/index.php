<?php
include_once 'Circle.php';
include_once 'Square.php';
include_once 'main.php';


$cricle = new Cricle('Circle', 4);
$retangle = new Retangle('Retangle', 3, 4);
$square = new Square('Square', 4);
$main = new Main($cricle, $retangle, $square);
// echo "<pre>";
$arr = $main->pushArray();

foreach ($arr as $value) {
    echo $value->getName() . "<br/>";
    echo "Dien tich: " . $value->Area() . "<br/>";
    echo "Chu vi: " . $value->Perimeter() . "<br/>";

    if ($value instanceof Square) {
        echo $value->howToColor();
    }
    echo "<br/>";
}
