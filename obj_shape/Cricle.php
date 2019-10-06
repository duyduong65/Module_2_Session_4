<?php
include_once('Shape.php');

class Cricle_1 extends Shape
{
    private $radius;

    function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * 2 * $this->radius;
    }
}