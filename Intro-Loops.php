<!-- While -->
<?php
$a = 1;

while($a <= 5) {
  echo "The number is: $a <br>";
  $a++;
}
?>
<br>

<?php
$b = 0;

while($b <= 100) {
  echo "The number is: $b <br>";
  $b+=10;
}
?>
<br>

<!-- Do While -->
<?php
$c = 1;

do {
  echo "The number is: $c <br>";
  $c++;
} while ($c <= 5);
?>
<br>

<?php
$d = 6;

do {
  echo "The number is: $d <br>";
  $d++;
} while ($d <= 5);
?>
<br>

<!-- For -->
<?php
for ($e = 0; $e <= 10; $e++) {
  echo "The number is: $e <br>";
}
?>
<br>
<?php
for ($f = 0; $f <= 100; $f+=10) {
  echo "The number is: $f <br>";
}
?>
<br>

<!-- For Each -->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>
<br>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $g => $val) {
  echo "$g = $val<br>";
}
?>
<br>

<!-- Break/Continue -->
<?php
for ($h = 0; $h < 10; $h++) {
  if ($h == 4) {
    break;
  }
  echo "The number is: $h <br>";
}
?>
<br>

<?php
for ($i = 0; $i < 10; $i++) {
  if ($i == 4) {
    continue;
  }
  echo "The number is: $i <br>";
}
?>