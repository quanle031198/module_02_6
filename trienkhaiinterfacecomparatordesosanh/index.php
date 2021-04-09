<?php
include "CircleComparator.php";

$circle1 = new Circle("circleOne", 4);
$circle2 = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circle1, $circle2));