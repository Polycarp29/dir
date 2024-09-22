<?php 

class A 
{
    public static function _print()
    {
        echo 'Hello Wolrd';
    }
}

class B 
{
    public function _echo()
    {
        A :: _print();
    }
}

$obj = new B();
$obj->_echo();




class domain
{
    protected static function domain_name()
    {
        return 'www.poltech.io';
    }
}


//** Create a child class that would inherit the methods of the class */


class get_domain extends domain
 
{ 
    public $website_name;
    public function __construct()
    {
        $this->website_name = parent :: domain_name();
    }
}

$get_site = new get_domain();
echo '<br />';
echo $get_site->website_name;

/** Accessing a static method from a  child class we we use the key word parent :: <name of method> remember this should be a protected method */