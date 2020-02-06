<?php
class Fruit {
  public $name;
  protected $color;
  private $weight;


  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  function getName(){
    return $this->name;
  }

  function getColor(){
    return $this->color;
  }

  function setColor($color){
      $this->color = $color;
  }

  function __destruct() {
    echo "<br>애플이 소멸됩니다.";

  }
}

$apple = new Fruit("Apple", "red");
echo $apple->getName()."<br>".$apple->getColor();
?>