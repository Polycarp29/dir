<?php

class greeting
{  
   public static function greet()
   {
    echo 'Hello World';
   }

   public function __construct()
   {
    self :: greet();
   }
}

$obj = new greeting();


$obj->greet();