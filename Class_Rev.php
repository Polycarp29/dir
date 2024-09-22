<?php
interface MakeInterface
{
    public function makesound();
}

Class Cat implements MakeInterface
{
    public function makesound()
    {
        echo 'Meow';
    }
}

$sounds = new Cat()
$sounds->makesound();


// PHP does not allow multiple inheritance but using traits allos you to use multiple inheritance 

class Validation 
{
    public $data 

    public function __construct()
    {
        $this->data = $data;
    }
    public static function validate()
    {
        $this->data = trim($this->data);
        $this->data = htmlspecialchars($this->data);
    }
}

/** Usage */

Validation :: validate();