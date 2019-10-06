<?php
include_once('Cricle.php');

class Cylinder extends Cricle_1
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $height);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
}