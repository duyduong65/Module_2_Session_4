<?php
include_once('Cricle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('square.php');

$cricle = new Cricle_1("Cricle 1", 3);
echo "Cricle area: " . $cricle->calculateArea() . "<br>";
echo "Cricle Perimeter: " . $cricle->calculatePerimeter() . "<br>";

$cylinder = new Cylinder("Cylinder 1", 3, 4);
echo "Cylinder are: " . $cylinder->calculateArea() . "<br>";
echo "Cylinder perimeter: " . $cylinder->calculatePerimeter() . "<br>";

$rectangle = new Rectangle_1("Rectangle 1", 3, 4);
echo "Rectangle area: " . $rectangle->calculateArea() . "<br>";
echo "Rectangle perimeter: " . $rectangle->calculatePerimeter() . "<br>";

$square = new Square("square 1", 4, 4, 4);
echo "Rectangle area : ".$square->calculateArea()."<br>";
echo "Rectangle area: ".$square->calculatePerimeter();