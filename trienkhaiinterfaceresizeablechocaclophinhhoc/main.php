<?php

class Main
{
    public $circle;
    public $retangle;
    public $square;
    public $array = [];
    public function __construct($circle, $retangle, $square)
    {
        $this->circle = $circle;
        $this->retangle = $retangle;
        $this->square = $square;
    }
    public function pushArray()
    {
        array_push($this->array, $this->circle, $this->retangle, $this->square);
        return $this->array;
    }
}
