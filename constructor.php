<?php 

/** CONSTRACTOR 
 * Allows you to initialize an object's property upon creation of an object 
 * Instead of calling a function at the end of a class and declaring arguements to the function method 
 * 
 */

 class Fruits{
    public $name; 
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
        return $this->name. "<br ?>" .$this->color;
    }

 }


 $is_fruit = new Fruits('Mango', 'Green');
 echo $is_fruit->get_name(). "<br />";