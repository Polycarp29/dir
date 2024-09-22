<?php 
/** We can use a function to change the name property by using the $this key word */

class Fruits{
    public $name;

    function set_name($name){
        $this->name = $name;
    }
}

$is_name = new Fruits();

$is_name->set_name('Apple');

echo $is_name->name;

/** In this we create a function set_name 
 * Creating the instance of the class itself 
 * Creating an arguement for the method in the class 
 * printing the object and property of the class [ variable]
 */