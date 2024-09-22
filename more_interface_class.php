<?php

/**Create a code that implements different animal sounds  */

interface Sounds
{
    public function make_sounds();

    // Function to be used ahead of all other classes
}

Class Animals implements Sounds
{
    public function make_sounds()
    {
        echo 'Meow';
    }

}

Class Animal2 implements Sounds
{
    public function make_sounds()
    {
        echo 'Mooow';
    }
}

Class Animal3 implements Sounds
{
    public function make_sounds()
    {
        echo 'Bark';
    }
}


$obj = new Animals();
$obj1 = new Animal2();
$obj2 = new Animal3();

$sounds = array($obj, $obj1, $obj2);

foreach($sounds as $sound)
{
    $sound->make_sounds();
}