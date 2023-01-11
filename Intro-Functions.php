<?php declare(strict_types=1);
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>

<!-- Function Arguments -->
<?php
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?>
<br>

<!-- Default Argument Value -->
<?php 
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>
<br>

<!-- Returning Values -->
<?php
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>
<br>

<!-- Return Type Declarations -->
<?php 
function addNumbers1(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers1(1.2, 5.2);
?>
<br>

<?php 
function addNumbers2(float $c, float $d) : int {
  return (int)($c + $d);
}
echo addNumbers2(1.2, 5.2);
?>
<br>

<!-- Passing Arguments by Reference -->
<?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>