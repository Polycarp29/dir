<?php 

class Fruit{
    public $name;
    public $color;
    public $weight;

    function get_name($name)
    {
        $this->name = $name;
    }
    private function get_color($color)
    {
        $this->color = $color;
    }
    protected function get_weight()
    {
        $this->weight = $weight;
    }
}

$is_fruit = new Fruit();
$is_fruit->get_color('Red');
$is_fruit->get_weight('300');
$is_fruit->get_name('Banana');

/**TIP
 * This will throw an error for trying to access private and protected methods
 */