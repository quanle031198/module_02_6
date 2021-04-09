<?php
include_once('Animal/Tiger.php');
include_once('Animal/Chicken.php');
include('Fruits/Apple.php');
include('Fruits/Orange.php');

echo ('---- Animals<br>');
$animals1 = new Tiger();
$animals2 = new Chicken();


echo$animals1->makeSound();
echo "<br/>";

echo $animals2->makeSound().", mon an: ".$animals2->howtoEat();
echo "<br/>";
echo ('---- Fruits<br>');

$fruit1 = new Apple();
$fruit2 = new Orange();

echo $fruit1->howtoEat()."<br/>";
echo $fruit2->howtoEat()."<br/>";
