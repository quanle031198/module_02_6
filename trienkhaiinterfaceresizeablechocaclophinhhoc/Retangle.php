<?php
include_once('Resize.php');
include_once 'Shape.php';
class Retangle extends Shape implements ResizeAble
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
    public function reSize()
    {
        $size = rand(1, 100) / 100;
        $this->width += $this->width * $size;
        $this->height += $this->height * $size;
    }
}
