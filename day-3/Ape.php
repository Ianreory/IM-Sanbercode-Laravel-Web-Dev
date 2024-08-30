<?php
require_once 'Animal.php';

class Ape extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name); // Memanggil konstruktor parent
        $this->legs = 2;
        $this->cold_blooded = "no";
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_legs()
    {
        return $this->legs;
    }

    public function get_cold_blooded()
    {
        return $this->cold_blooded;
    }

    public function yell()
    {
        echo "Auooo";
    }
}
?>