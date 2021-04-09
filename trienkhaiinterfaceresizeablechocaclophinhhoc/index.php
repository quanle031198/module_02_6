<?php
include_once 'Circle.php';
include_once 'Square.php';
include_once 'main.php';

$cricle = new Cricle('Circle',4);
// $cricle->Area()."<br/>";
//  $cricle->Perimeter()."<br/>";
//  $cricle->reSize()."<br/>";
//  $cricle->Area()."<br/>";
//  $cricle->Perimeter()."<br/>";
$retangle = new Retangle('Retangle',3, 4);
//  $retangle->Area()."<br/>";
//  $retangle->Perimeter()."<br/>";
//  $retangle->reSize()."<br/>";
//  $retangle->Area()."<br/>";
//  $retangle->Perimeter()."<br/>";
$square = new Square('Square',4);
//  $square->Area()."<br/>";
//  $square->Perimeter()."<br/>";
//  $square->reSize()."<br/>";
//  $square->Area()."<br/>";
//  $square->Perimeter()."<br/>";
$main = new Main($cricle, $retangle, $square);
echo "<pre>";
$arr = $main->pushArray();

foreach ($arr as $value) {
    echo $value->getName()."<br/>";
    echo "Dien tich After: ".$value->Area() . "<br/>";
    echo "Chu vi After: ".$value->Perimeter() . "<br/>";
    $value->reSize() ;
    echo "Dien tich Befor: ".$value->Area() . "<br/>";
    echo "Chu vi Befor: ".$value->Perimeter() . "<br/>"."<br/>";
}
