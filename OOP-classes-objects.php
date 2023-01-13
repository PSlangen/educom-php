<?php
class Fruit {       //Defines class
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {    
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();       ///Create new object
$apple->set_name('Apple');  ///Set name of object
$apple->set_color('Red');   ///Set color of object
$banana = new Fruit();
$banana->set_name('Banana');
$banana->set_color('Yellow');


echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
echo "<br><br>";
echo "Name: " . $banana->get_name();
echo "<br>";
echo "Name: " . $banana->get_color();
echo "<br><br>";

$apple->name = "Pear";
echo $apple->name;
echo "<br>";
var_dump($apple instanceof Fruit);
?>