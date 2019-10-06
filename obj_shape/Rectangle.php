<?php
include_once('shape.php');

class Rectangle_1 extends Shape
{
    private $width;
    private $height;

    function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter()
    {
        return 2 * ($this->width + $this->height);
    }
}