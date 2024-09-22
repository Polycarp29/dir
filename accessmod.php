<?php 

/** Demonstration of access modifies for class properties */

class Fruits{
    public $name ;
    private $color;
    protected $weight;
}

$is_fruit = new Fruits();
$is_fruit->name = "Mango";
$is_fruit->color = "Yellow";
$is_fruit->weight = "300";

/**TIP
 * This would lead to a fatal error because its unable to access private and protected properties color and weight.
 */