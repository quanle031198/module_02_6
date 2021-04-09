<?php
include_once ('AbstractClass/Animal.php');
include_once('InterfaceClass/Edible.php');

class Chicken extends Animal implements Eible {
    public function makeSound()
    {
        return "Chicken: Cacacacaca";
    }
    public function howtoEat()
    {
        return "thit ga xao mang";
    }
}