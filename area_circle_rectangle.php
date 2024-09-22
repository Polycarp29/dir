<?php

abstract class shape 
{
    public static $pi = 3.14159;

    abstract public function calculateArea(): int|float;
}

class Circle extends shape
{
    public $radius = '';

    public function calculateArea(): int|float
    {
        return parent :: $pi * $this->radius ** 2;
    }
}

class Rectangle extends shape
{
    public $length = '';
    public $width = '';

    public function calculateArea() : int|float
    {
        return $this->length * $this->width;
    }
}

$circle = new Circle();
$circle->radius = 7;
echo $circle->calculateArea() . "<br />";

$rectangle = new Rectangle();
$rectangle->length = 20.5;
$rectangle->width = 7.6;
echo $rectangle->calculateArea();