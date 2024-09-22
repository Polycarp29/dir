<?php 

error_reporting(E_ALL);
/* When an arrays is pointed to a specific key the it becomes an associative array  */


$apikeys = [
    "Username"=>"Poltech",
    "User_Id"=>"368790456",
    "Password"=>"Nm643Ppq$",
    /* Arrays can be merged inside arrays*/
    "MoreDetails"=> [
        "Country"=>"KE",
        "Phone"=> 07979056784.0,
        "Status"=>"Single",
        "Over 18"=> true, 
        'Date of Birth' => "Aug 05, 2018",
        "Criminal_Records" => true,
         "Dates"=>[
                    "Dates" => "OCT 05 2022",
                    "Dates-2"=> "OCT 08 2020"
        ]
    ]
];
echo "<pre>";
print_r($apikeys);
echo "</pre>";

$apikeys["Email"]= "admin@mail.com";

echo "<pre>";
print_r($apikeys);
echo "</pre>";

echo count($apikeys);



echo "<pre>";
print_r($apikeys);
echo "</pre>";
 
echo $apikeys['MoreDetails'] ['Date of Birth'];
echo $apikeys['MoreDetails'] ['Dates'] ['Dates-2'];

$array = ['1', '2', '3'];

/* array_pop  removes the last array parameter*/
array_pop($array);

echo '<br>';
print_r($array);

echo '<br>';

array_shift($array);

print_r($array);


/* array_shift removes the first array parameter */


/* Given this array */

$ar_ray = ['foo'=> 20, 2, '50'=> 2020, 90, 'Poltech'];
echo '<br>';
print_r($ar_ray);

unset($ar_ray[0]);

print_r($ar_ray);

$_details = [
    "Details" => [
        "Username" => "admin",
        "Full_name" => "Okello Max",
        "Other Details" => [
            ["D.O.B" => "OCT 05 2001"]
        ]
        ],
    "Payment Details" => [
        "MPESA" => "KES 220",
        "Transaction Code" => "A078HKLI2",
    ]
]; 

echo "<pre>";
print_r($_details);
echo "</pre>";

echo $_details["Details"]["Other Details"];


$det = [
    'name' => 'Max',
    'Age' => 18,
    'D.O.B' => ['August-13-2019'],
];
    


echo "<pre>";
print_r($det);
echo "</pre>";

foreach($det as $key => $details):
    echo $key .":" .json_encode($details) . "<br />";
endforeach;


/** ARRAY FUNCTIONS */

/** Array-chunck 
 *  array_chunk(array $array, int $length, [,bool $preserve_keys])
 * 
 */

$items = ['a' => 1, 'b'=> 2, 'c'=> 3, 'd'=> 4, 'e'=> 5, 'f'=>6, 'j'=>7, 'h'=>8];

function is_chunk(array $value){
    echo "<pre>";
    print_r($value);
    echo "<pre>";
}

is_chunk(array_chunk($items, 2));
is_chunk(array_chunk($items, 2, true));


/** To preserve the keys we will have to pass the thrid arguement as true */



/** UNSET FUNCTION */

unset($items['a']);

print_r($items);

/** This code removes the array indexed 'a'*/


$is_splice = ['BMW', 'Volvo', 'Toyota', 'Mistubishi', 'Infinity', 'Mercedes', 'Subaru', 'Nissan', 'Bentley', 'Audi', 'Volkswagen'];

array_splice($is_splice, 1, 2);
is_chunk($is_splice);

sort($is_splice);
is_chunk($is_splice);

/**I this asort array sorts the associative arrays based on the values */

$is_asort = [
    'James' => 35,
    'Peter' => 70,
    'Lukman' => 20,
    'John' => 35,
    'Hamphrey' => 78,
];

asort($is_asort);
is_chunk($is_asort);

/** Sorts the arrays based on the keys */

$is_ksort= [
    'James' => 35,
    'Peter' => 70,
    'Lukman' => 20,
    'John' => 35,
    'Hamphrey' => 78,
];

ksort($is_ksort);
is_chunk($is_ksort);

arsort($is_asort);
is_chunk($is_asort);

krsort($is_ksort);
is_chunk($is_ksort);

/** Array Combine = combines the two arrays and creates one of them key and another value 
 * When the number of array1 and array 2 doesnt match it will throw an error
*/
$is_array1 = ['a', 'b', 'c'];
$is_arrays2 = [5, 10, 15];

is_chunk(array_combine($is_array1, $is_arrays2));

/** ARRAY FILTER , FILTERS OUT UNWANTED ARRAYS BY USE OF A CALLABLE FUNCTION */

$is_filter = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
$even = array_filter($is_filter, fn($numbers)=>$numbers % 2 === 0);

is_chunk(array_chunk($even, 2));

/**In this array, we imploy a collable function to be able show even numbers */


/**ARRAY KEYS */

$is_key = ['a' => 5, 'b' => 10, 'c'=> 15, 'd'=> 20, 'e'=> 25];
/**We can use array key to get the keys of the array */

$keys = array_keys($is_key);

is_chunk($keys);


/** Array Map */
/** Takes a collable function just like array filter */
/** Solve this to multiply arrays by 3 */

$is_map = [1,2,3,5,78,9];

$sol = array_map(fn(int $numbers) => $numbers*3, $is_map);
is_chunk($sol);


/**Given two arrays */

$is_ar1 = ['a'=> 1 , 'b'=>90, 'c'=> 80];
$is_ar2 = ['d'=> 67, 'e'=> 64, 'f'=> 123];

$solution = array_map(fn($number1, $number2)=> $number1*$number2  , $is_ar1, $is_ar2);
is_chunk($solution);

/** Array Merge */

$is_merge = [12, 33, 56,78];
$is_merge2 = [43, 64,76,0];

/** Allows you to merge multiple arrays */

$merged = array_merge($is_merge, $is_merge2);
is_chunk($merged);


/** Array Search 
 * 
 * Searches the key to specific array
 */
$is_search = ['a'=> 1 , 'b'=>90, 'c'=> 80];

$searched = array_search(90, $is_search);
var_dump($searched);