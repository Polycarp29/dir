<?php

abstract class Prefix
{
    const GREET = "Hello";
    abstract public function get_prefix($name);
}

class check_prefix extends Prefix
{
    //** Abstract function should rhyme the parents method */

    public function get_prefix($name) 

    {
        //** Conditional statement to check */

        if($name == "John Doe")
        {
            echo self :: GREET. 'Mr.' . $name;
        }
        elseif($name == "Jane Doe")
        {
            echo self :: GREET . 'Mrs'. $name;
        }
        else 
        {
            echo 'Something Went Wrong';
        }
    }
}


$obj = new check_prefix();
$obj->get_prefix('John Doe');

/** TIP */

/** Abstract in short are incomplete parent classes that are given life by child classes  */