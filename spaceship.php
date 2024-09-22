<?php 
$_x = 5;
$_y = 10;

var_dump($_x <=> $_y);

/* This operation will return a -1 because:
because x is less than y */

$x = 10;
$y = 5 ; 

/* This expression will return 1 because x is greater than y ; */

var_dump($x <=> $y);

$x = 10; 
$y = 10;

/* Will return a zero because x equals to 10 
*/
var_dump($x <=> $y);


/* Increament/ Decreament operators  ++ , --*/

$__x = 7;

echo ++$__x;
/* Increases the value before returning the value 
This is called Pre-Increament

*/

echo $__x++;
echo $__x;

/* Returns the value before increament this is called: 
    Post-Increament */

$_pre = 5; 

echo --$_pre;

/* Decreases the value before returning the value (Pre-Decreament) */

$_post = 5; 

echo $_post--;

echo $_post;

/*returns the value before decreasing */


/* Logical Operators Like &&, ||, or and xor */

$_var = true; 
$_var_2 = false; 

function hello(){
    echo 'Hello World';
    return false; 
}
var_dump($_var && hello());

/* In this specific function the variable $_var has been set to true so the function will execute while when the variable
 is turned to false the function would not execute */

 $var_ = false;
 $var_2 = false; 

 function hello2(){
    echo 'Hello World';
    return false; 
 }

 var_dump($var && hello2());

 /* When we add double pipe and evaluate it to true the function wont execute */

 $va = false; 
 $va3 = false; 

 function hello3(){
    echo "Hello World"; 
    return false;
 }
 var_dump($va && hello3() || true);

 /* In this case: 
    >>> Php only chooses the true value and short circutes the rest of the code
*/


include ('functions.php');

function exe(){
    $value = delay();

    return $value;
}

/**Outside the function we return the value we have passed  */
echo "<br />";
echo exe().';';