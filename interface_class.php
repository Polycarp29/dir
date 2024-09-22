<?php

interface Animal
{
    public function makeSound();
}

class get_sound implements Animal
{
    public function makeSound()
    {
        echo 'Mooh';
    }
}

$obj = new get_sound();
$obj->makeSound();


/** TIP */

/**
 * Allows you to specify what methods a class should implement 
 * 
 * Makes it easy to use a variety of different classes in the same way.
 */