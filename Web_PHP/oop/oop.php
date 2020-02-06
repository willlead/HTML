<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name) {
        $this->name = $name;
    }   

    function getName(){
        return $this->name;
    }

    function getColor(){
        return $this->color;
    }
}

$apple = new Fruit("Apple");
echo $apple->getName();
?>