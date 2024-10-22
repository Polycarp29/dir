<?php 


/* Functions */

function foo(){
    return "Hello World";

}

$x = foo();


var_dump($x);

/* return value is an optional value, by any chance an element is not declared to the return value it will return a null value */

function val(){
    return +"10";
}
$xy = val();

var_dump($xy);


function ret(): void{
    return ;
}
var_dump(ret());


/* To be able to retun a value despite the data type conflicts what you return */

function value(): ?int{
    return null;
}

var_dump(value());


/* We can be able to return multiple types of data types with the pipe operator | */

function pipe(): int|float{
    return 1.5; /* You can be able to return an integer and float */
}

var_dump(pipe());

$x = pipe();

echo $x;


/* Instead of typing many data types we can use mixed proprty */

function mixed(): mixed{
    return [
        'Username' => 'Max',
        'Age' => 18,
    ];

}

var_dump(mixed());


/* Functions and arguements */

function args(int|float $x, int|float $y): int|float{
    if($x % 2 === 0 and $y % 2 === 0){
        $x /= 2 and $y /= 2;

    }
    return $x * $y;
}

$a = 6.0;
$b = 6.0;

echo args($a , $b) . "<br />";


/** Including several arguement values in a function */



function sum(...$numbers): int|float{
    return array_sum($numbers);
}
echo sum(10, 20.5, 60.7,12);
echo "<br />";


function add(...$num): int|float{
    $sum = 0;
    /** Interate with for each since ...$num is an array */

    foreach($num as $numbers){
        $sum += $numbers;

        /** Will add every number in the array */

    }
    return $sum;

    
}
echo add(5,10,20,10) . ";" . "<br />";


/** Using assocative arrays for positional representations, in this case every index that represents an array will be passed as seperate arguements  */


function arr(int $x , int $y): int{
    var_dump($x, $y);

    if ($x % $y === 0){
        return $x % $y;
    }
    return $x;

}
$dim = ['y' => 10, 'x' => 20 ];
echo arr(...$dim); 




$x = 5;

function fooo(){
    $x = 1;
    echo $x;
}

fooo();

function delay(){
    sleep(2);
    return 10;
}


/**VARIABLE FUNCTIONS , ANONYMOUSE FUNCTIONS , CALLABLE AND ARROW FUNCTIONS */

function addition(int|float ...$numbers): int|float{
    return array_sum($numbers);
}

/**We can implement array sum to a string addition for this to work */

$x = 'addition';
echo '<br />';
echo $x(1,2,3,4,5);

/** The result will be the sum of the arrays in the description 
 * 
 * The string should be identical to the function name.
 * 
 * in an event when the function does is not identical to the variable string we will use is_callable function
*/

function sumation(int|float ...$numbers): int|float{
    return array_sum($numbers);
}

$xy = "addit";

if(is_callable($xy)){
    echo $xy(1,2,3,4,5,6);
}
else{
    echo "<br />";
    echo 'Not callable';
}

/** You can be able to point functions to variables   here is an example of the same*/

$sum = function (int|float ...$numbers){
    return array_sum($numbers);
};
echo "<pre>";
print_r($sum(1,2,2,6,8));

echo "</pre>";

/** For this is a demonstration of a lampda function which is anonymous
 * You can also access variables out of its local scope
 */
 $b = 6;
 $suu = function (int|float ...$numbers) use($b): int|float{
    
    return array_sum($numbers);
 };
 echo $suu(1,2,4,5,6).$b;

 /**This will print the local variable used in the anonymous function and also it will be able to print the sum of the arrays in the variable */

 /**Arrow Functions */

 $given = [1,2,3,4,5,6];

 $array2 = array_map(fn(int|float $numbers)=> $numbers*$numbers, $given);

 echo "<pre>";
 print_r($array2);
 echo "</pre>";

 /** Longest version of the code */

 $gv = [1,2,3,4,5,6];

 $arry = array_map(function($array){
    return $array * $array;
 }, $gv);

 echo "<pre>";
 print_r($arry);
 echo "</pre>";

 /**Create a function that checks for even numbers in an array */


 

 





function _exec(...$numerals){
    foreach($numerals as $modulo){
        if($modulo % 2 === 0){
          echo $modulo.";". "Is Even". "<br />";
        }elseif($modulo % 2 === 1){
            echo $modulo. "=>". "Is Odd". "<br />";
        }else{
            echo "Error";
        }
    }
}

$d = _exec(1,2,3,4,5,6,7,8,0,57,78,90,78,65,458);

echo $d. "<br />";

function myFamily($lastname, ...$firstname){
    $txt = "";
    $len = count($firstname); 

    for ($i = 0; $i < $len; $i++) {
        $txt = $txt. "Hi," .$firstname[$i] .$lastname. "<br>";
    }
    return $txt;
}
$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;




function is_time(){
    $current_time = date('H');
    $time_zone =date('e');

    /** Create a condition to handle the variables */

    if($current_time < "12"){
        echo "Good Morning";
    }elseif($current_time >= "12" && $current_time < "17" ){
        echo "Good Afternoon";

    }elseif($current_time >= '17' && $current_time < "19" ){
        echo "Good Evening";

    }elseif($current_time >= "19"){
        echo "Good Night";

    }
    
}

$is_time = is_time();



function is_odd( ...$is_num){
    $num = []; // This is an array 

    foreach($is_num as $numb){
        if ($numb % 2 === 1){
            echo $numb. 'Number is odd' ."<br />";
            
        }
        $num[] = (int) $numb;
    }
    return $num;
}

$scan = is_odd(1,2,3,4,5);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'new_php'. DIRECTORY_SEPARATOR);

echo APP_PATH;

echo "<br />";

 /** Passing values by reference */


 function incremt(&$value)
 {
    $value += 5;
 }

 $num = 2;

incremt($num);

echo $num;


function addt($arr)
{
    $sum = 0;
    for($i=0; $i<count($arr); $i++)
    {
        $sum +=$arr[$i];
    }
    return $sum;
}

$nu = [254,890,7895, 900, 6854];

$rslt = addt($nu);

echo $rslt;

echo "<br />";
function ad($u)
{
    $yt = 0;
    for($i=0; $i<count($u); $i++)
    {
        $yt +=$u[$i];
    }
    return $yt;
}

$dgt = [5,97,86,90];
 $rs= ad($dgt);
 echo $rs;
 

 class Add 
 {
    public $dgt;
    public $sum;

    public function __construct($dgt)
    {
        $this->dgt = $dgt;
        $this->sum = 0;
    }
    public function sumAd()
    {
        for($x=0; $x<count($this->dgt); $x++)
        {
            $this->sum += $this->dgt[$x];
        }
    }
    public function getAdd()
    {
        return $this->sum;
    }
 }


 $rvr = [24, 78, 90, 367];

 $obj = new Add($rvr);

 $obj->sumAd();

 echo $obj->getAdd();


 $zd = ['RVR', 'Skyline', 'Mark X', 'Crown', 'Peugot 2008', 'VW Golf GTI'];

 $cnt = count($zd);

 for($x=0; $x < $cnt; $x++)
 {
    echo $zd[$x];
 }
