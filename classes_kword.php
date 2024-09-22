<?php 

// We can directly change the property name outside a class by directly changing the property value


class Fruits{
    public $name;
}

$is_fname = new Fruits();
$is_fname->name = "Apple";

echo $is_fname->name;