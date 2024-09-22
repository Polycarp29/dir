<?php

class Fruits{
    public $name;
    public $color;

   public function __construct($name , $color)
    {
        $this->name = $name; 
        $this->color = $color;
    }
   public function is_echo()
    {
        echo $this->name . "<br />". $this->color;
    }
}

/** Create a child class */

class Mention extends Fruits
{
    public function is_print()
    {
      echo "This Fruit is {$this->name} and its color is {$this->color}";
    }
}


/** Create an object instance of the child class and extends fruits */

$is_fruit = new Mention('Straw_Berry', 'Red');
$is_fruit->is_print();
echo "<br />";

$is_fruit->is_echo();

/**TIP 
 *  We have to declare both methods and properties within the parent and child class public 
 * Calling a protected function or property of a class outside a class would result to an error.
 * 
 */