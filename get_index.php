<?php
 require 'namespace.php';

 echo "<br />";
 
 $obj = new html\user_details();

 $obj->name = 'Max';
 $obj->u_email = "max@support.io";
 $obj->print_user();


 /** tip  */
 /**When using namespace we include the file that has namespaces and create an instance of a class with the name of the namespace  */