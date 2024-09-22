<?php

class _self
{
    public $name; 
    public $age;

    const ABOUT_ = "The Mentioned student is our student";

    public function __construct($name, $age)
    {
        $this->name = $name; 
        $this->age = $age; 

    }

    public function is_details()
    {
        echo $this->name . $this->age . self :: ABOUT_;
    }

}

$obj = new _self('Makhakha', '18');

$obj->is_details();