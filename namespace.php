<?php 

namespace html;

class user_details 
{
    public $name = "";
    public $u_email = "";

    public function print_user()
    {
        echo "This Username {$this->name} With Email {$this->u_email}";
    }
}

$obj = new user_details();
$obj->name = "Poltech";
$obj->u_email = "admin@poltech.io";
$obj->print_user();


class Row 
{
    public $numCells = 0;
    public function message()
    {
        echo "<p> The Rows has {$this->numCells}";
    }
}