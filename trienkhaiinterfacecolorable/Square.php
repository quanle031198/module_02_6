<?php
include_once('Retangle.php');
include_once 'Colorable.php';
class Square extends Retangle implements Colorable
{
    public function __construct($name,$width)
    {
        parent::__construct($name,$width, $width);
    }
    public function howToColor()
    {
       return " Color all four sides..";
    }
    
}
