<!-- Arrays -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
echo count($cars)
?>
<br><br>

<!-- Indexed Arrays -->
<?php
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
  }
?>
<br><br>

<!-- Associative Arrays -->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.<br>";

foreach($age as $y => $y_value) {
    echo "Key=" . $y . ", Value=" . $y_value;
    echo "<br>";
  }
?>
<br><br>

<!-- Multidimension Arrays -->
<?php
$cars2 = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
echo $cars2[0][0].": In stock: ".$cars2[0][1].", sold: ".$cars2[0][2].".<br>";
echo $cars2[1][0].": In stock: ".$cars2[1][1].", sold: ".$cars2[1][2].".<br>";
echo $cars2[2][0].": In stock: ".$cars2[2][1].", sold: ".$cars2[2][2].".<br>";
echo $cars2[3][0].": In stock: ".$cars2[3][1].", sold: ".$cars2[3][2].".<br><br>";

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars2[$row][$col]."</li>";
    }
    echo "</ul>";
  }
?>

<!-- Sorting Arrays -->
<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers); // ascending; rsort for descending

$arrlength2 = count($numbers);
for($z = 0; $z < $arrlength2; $z++) {
  echo $numbers[$z];
  echo "<br>";
}
?>
<br><br>

<?php
asort($age); // ascending, according to value
// ksort($age); //ascending, according to key
// arsort($age); //descending, according to value
// krsort($age); //descending, according to key

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>