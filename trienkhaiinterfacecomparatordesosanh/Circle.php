<?php
class Circle{
    public $name;
    public $radius;
    
    public function __construct($name,$radius)
    {
        $this->name = $name;
        $this->radius = $radius;
        
    }

    public function getRadius()
    {
        return $this->radius;
    }

}