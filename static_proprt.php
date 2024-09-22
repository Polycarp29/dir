<?php 

//** Static Properties can be called directly without instance of a class */

class pi 
{
    public static $pi_value = 3.142;
}

echo pi :: $pi_value;


/** USING IT ON AN ANOTHER FUNCTION */


class value 
{
    public static $pi_val = 3.14159;

    
    public function get_val()
    {
        return self :: $pi_val;
    }
        
    
}

$obj = new Value();
echo '<br />';
print_r($obj->get_val());



/** ACCESSING PROTECTED STATIC VALUE  */

class Val 
{
    protected static $p_val = 3.14159;
}
// Inherits the property from the parent class.

class get_av extends Val 
{
    public $pi_fun;
    public function __construct()
    {
        $this->pi_fun = parent :: $p_val;
    }
}

$value = new get_av();
echo '<br />' . 'The demonstration with Protected Property'. '<br />';
echo $value->pi_fun;