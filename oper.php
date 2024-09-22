<?php

/* Converting a string into an integer by adding an operato before the string */

$x = +"10";
$y = 80;

var_dump($x * $y);

$arrays = [
    "Number" => +"10",
    "Float" =>12.8,
];

var_dump($arrays["Number"]* $arrays["Float"]);


/* When dividing a variable x with a zero as variable y */

$var_x = 10;
$var_y = 0;

/* This will through an error if fdiv function has not been used */

var_dump(fdiv($var_x , $var_y));


define("VAR_1", 10);
define("VAR_2", 3);

var_dump(VAR_1 % VAR_2);

/* In the above scenario the remainder is cast to an integer to facilitate abit of an accurate finding we will use fmod function */

define("VAR_3", 10);
define("VAR_4", 2.9);

var_dump(fmod(VAR_3, VAR_4));



