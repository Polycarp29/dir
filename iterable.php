<?php
/** Iterables are any value that can be looped with for each loop  in PHP This are arrays */


function iter(iterable $values)
{
    foreach($values as $value):
        echo $value;
    endforeach;

}

$arr = ['1', '2', '3', '4'];

iter($arr);