<?php 

class is_name
{
    public $num;

    public function __construct(...$num)
    {
        $this->num = (array) $num;
    }

    protected function is_check(){
        foreach($this->num as $number){
            if($number % 2 === 0)
            {
                echo "{$number} Is  Even". "<br />";
            }elseif($number % 2 === 1)
            {
                echo "{$number} Is Odd". "<br />";
            }else
            {
              echo "Something Went Wrong";
            }
        }
    }
}

// Child Class Follows 


class even_odd extends is_name
{
    public function is_get()
    {
        // Introduce the protected function here 
        $this->is_check();
    }
}

// Create an object

$obj = new even_odd(23, 90, 53, 76);
$obj->is_get();


/**TIP */

/**The protected method function has to be declared or invokd within the child class 
 * else when invoking the protected class outside the class it will throw an error */