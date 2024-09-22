<?php 

abstract class Car
{
    public $name; 

    public function __construct($name)
    {
        $this->name = $name;
    }
    //**This is an abstraact method in the abstract Class Car */
    abstract public function intro() : string;
    
}

/** Create a child class that inherits the properties and methods of the abstract class */


class Volvo extends Car
{
    public function intro():string
    {
        return "Experience the comfort of a Swedish Car $this->name";
    }
}

class Soon extends Car
{
    public function intro(): string
    {
        return "Polycarps Soon To Be Car is  $this->name";
    }
}

$obj = new Volvo("Volvo");
echo $obj->intro();

echo "<br />";

$obj2 = new Soon("RVR");
echo $obj2->intro();

