<!-- String -->
<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?>

<!-- Integer -->
<?php
$x = 5985;
var_dump($x);
?>

<!-- Float -->
<?php
$x = 10.365;
var_dump($x);
?>

<!-- Boolean -->
<?php
$x = true;
$y = false;
?>

<!-- Array -->
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

<!-- Object -->
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<!-- Null Value -->
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>