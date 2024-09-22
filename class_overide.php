<?php 

class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
         $this->name = $name;
         $this->color = $color;
    }

    public function is_print()
    {
        echo "This Fruit is {$this->name}, And it has a distinctive color {$this->color}";
    }
}

/**Create a child class that would overide methods and properties */


class is_child extends Fruit
{
    public $weight;

    public function __construct($name, $color , $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function is_print()
    {
        echo "This Fruit is {$this->name}, And it has a distinctive color {$this->color} with Weight {$this->weight}";
    }
}

define('FRUIT_NAME', 'Apple');
define('FRUIT_COLOR', 'Red');
define('FRUIT_WEIGHT', '500G');

$obj = new is_child(FRUIT_NAME , FRUIT_COLOR, FRUIT_WEIGHT);
$obj->is_print();


/*** TIP */

/**In this type of code, the child class overides all the methods and properties from the parent class 
 * 
 * We can use final to the method to prevent overwriting .
*/


