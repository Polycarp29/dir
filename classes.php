<?php 
class Fruits{
    public $name;
    public $color;

    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
}


/** Create an instance of the class which should be the object */

$is_fruit1 = new Fruits();
$is_fruit2 = new Fruits();

$is_fruit1->set_name('Apple');
$is_fruit2->set_name('Banana');

$is_fruit1->set_color('Red');
$is_fruit2->set_color('Yellow');


echo '<pre>';
print_r($is_fruit1->get_name());
echo "<br>";
print_r($is_fruit2->get_name());
echo '<pre>';

echo $is_fruit1->get_color() . "<br />";

echo $is_fruit2->get_color();

