<?php

include_once 'Shape.php';
class Cricle extends Shape 
{
    public $radius;
    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function Area()
    {
        return pi() * pow($this->radius, 2);
    }
    public function Perimeter()
    {
        return pi() * $this->radius * 2;
    }
    
}
