<?php
include_once ("cricle.php");
include_once ("cylinder.php");

$cricle = new Circle(5);
$cylinder = new Cylinder(5,5);

echo "Cricle area: ".$cricle->calculateArea()."<br>";
echo "Cricle Perimeter: ".$cricle->calculatePerimeter()."<br>";
echo "Cylinder area: ". $cylinder->calculateArea()."<br>";
echo "Cylinder perimeter: ". $cylinder->calculatePerimeter();
