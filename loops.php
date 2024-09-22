<?php 

/* In tthis segment we will talk about while , do while for each and for loops */

$xy = 1; 

while($xy < 10):
    if($xy == 5){
        // Use an pre-increment first to prevent an infinite loop 

        $xy ++; 
        break ;
        echo $xy; 
    }
    echo $xy ++ ."<p></p>";
    
endwhile;

/* You can use an alternative syntax for this by using endwhile; */

/* Using For loops 
=> It takes three expressions that are  separated by a semi-colon, 
=> First expression is a variable assigned , second is the condition , evaluated at the beggining of each iteration, 
=> Value added at the end of each iteration.
*/

for ($i = 0; print $i, $i < 15; $i++){
    echo $i .'<br>';
}


/* Using strings and for loop */

$stringln = "Hello World";

for ($x = 0; $x < strlen($stringln); $x++){
    echo $stringln[$x] .";";
}


/* Using an Array */

$ar = ["a", "b", "c"];

for ($xy = 0; $xy < count($ar); $xy++):
    echo $ar[$xy] . "<br>";
endfor;

/* Using an Indexed array with the function for each loop */

$programming_languages = ["PHP 8.0", "Python 3.10", "JavaScript", "Java"];

foreach($programming_languages as $x ):
    echo $x .";" . "<br>"; 
endforeach;
/* For the above you can also be able to index each by assigning a key to every element in the array */

$languages = ["PHP 8.0", "Python 3.10", "JavaScript", "Java"];

foreach($languages as $key => $xy):
    echo $key . ":" . $xy . "<br>" ;
endforeach;

/* Using an for each loop with associative and multidimensional arrays */

$assoc = [
    "Username" => "Poltech", 
    "Email" => "admin@poltechsolutions.io",
    "Skills" => ["Php", "Python", "Bash"], 
];

foreach($assoc as $key => $languages):
echo $key .":" .  json_encode($languages). "<br>";
endforeach;
echo "<br />";

/* We will use json_encode because the array  is within an array 
For other case scenarions we can use implode

*/

$multidi = [
    "Username" => "Poltech", 
    "Email" => "admin@poltechsolutions.io",
    "Skills" => ["Php", "Python", "Bash"], 
];

foreach($multidi as $val => $value):
    if(is_array($value)): // set a condition  first to determine if the value is an array 
        $value = implode(',', $value);
    endif;
    echo $val . ":" . $value . "<br />";
endforeach; 

$xyz = 1;

/* for with an infinity loop */
for(;;):
    if($xyz > 10):
        break;
    endif;
    echo $xyz .';' .'<br \>';
    $xyz++;
endfor;


/** Initiate Variables */



/** For loops are always used if you know how many times the script will run */

$args = ["1", "2", "3", "4"];

$leng = count($args);

for($xi = 0; $xi <$leng; $xi++){
    echo "<br>";
    echo $args[$xi]."".";";
}




function sumArray(int ...$a)
{
    $n = 0;
    $len = count($a);
    for($x = 0; $x < $len; $x++)
    {   
        $n += $a[$x];
       
        
    }
    return $n;
}

$b = sumArray(4,5,6,7,8,9);
echo $b;


function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
  }
  
  $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
  echo $a;





class AreaSq 
{
    public $width;
    public $length;

    public function __construct(int $width, $length)
    {
        $this->width = $width;
        $this->length = $length;
    }
    public function calc()
    {
        return $this->width * $this->length;
    }
}

class Calc extends AreaSq
{
    public function Exe()
    {
       echo $this->calc();
    }
}


$bj = new Calc(5,9);
$bj->Exe();


echo "<br>";

$arr = [2,3,4,5,8];

$cnt = count($arr);

$ry = 0;

for($i=0; $i<$cnt; $i++)
{
    $ry += $arr[$i];
}

echo $ry;