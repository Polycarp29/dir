<?php 

class Fruits{
    public $name;
    public $color;

function __construct($name, $color)
{
    $this->name = $name;
    $this->color= $color;
}

function __destruct(){
    echo "This Fruit is '".$this->name."' Its Color is  '".$this->color."'";
}
}

$is_fruit = new Fruits('Orange' , 'Orange');

/**NOTES */
/** A destructor is called when an object or script is destructed or the script is stopped,instead of declaring another function
 * When using a destructer we make the code shorter and easily usable instead of repetition with a normal function.
*/