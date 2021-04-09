<?php
include_once('Retangle.php');
class Square extends Retangle
{
    public function __construct($name,$width)
    {
        parent::__construct($name,$width, $width);
    }
}
