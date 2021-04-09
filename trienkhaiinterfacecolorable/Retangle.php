<?php

include_once 'Shape.php';

class Retangle extends Shape 
{

    public function __construct($name,$width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function Area()
    {
        return $this->height * $this->width;
    }
    public function Perimeter()
    {
        return ($this->height + $this->width) * 2;
    }
   
  
}
