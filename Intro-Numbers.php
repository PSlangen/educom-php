<!-- Integers -->
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>
<br>

<!-- Floats -->
<?php
$x = 10.365;
var_dump(is_float($x));
?>
<br>

<!-- Infinity -->
<?php
$x = 1.9e411;
var_dump($x);
?>
<br>

<!-- NaN -->
<?php
$x = acos(8);
var_dump($x);
?>
<br>

<!-- Numerical strings -->
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>
<br>

<!-- Casting Strings/Floats to integers -->
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";
?>
<br>


<!-- Cast string to int -->
<?php
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>