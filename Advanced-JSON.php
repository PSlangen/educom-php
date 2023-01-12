<!-- Associative array => JSON -->
<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>
<br>

<!-- Indexed array => JSON -->
<?php
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>
<br>

<!-- JSON => PHP -->
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));
?>
<br>

<!-- JSON => associative array -->
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj, true));
?>
<br>

<!-- Accessing the decoded values from PHP object -->
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);
$arr = json_decode($jsonobj, true);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
echo"<br>";
echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];
?>
<br>

<!-- Looping through values-->
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);
$arr = json_decode($jsonobj, true);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}

foreach($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>
