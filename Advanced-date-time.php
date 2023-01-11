<!-- Get a date -->
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
<br><br>

<!-- Get a time -->
<?php
echo "The time is " . date("h:i:sa");
?>
<br><br>

<!-- Get time zone -->
<?php
date_default_timezone_set("Europe/Amsterdam");
echo "The time is " . date("h:i:sa");
?>
<br><br>

<!-- Create date with mktime -->
<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br><br>

<!-- Create date from string with strtotime -->
<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br>";

$e=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $e) . "<br>";

$f=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $f) . "<br>";

$g=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $g) . "<br>";
?>
<br>

<!-- Output date of next 6 Saturdays -->
<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>
<br>
<!-- Output numbers of days until 4th of July -->
<?php

$birthday=strtotime("June 05");
$d2=ceil(($birthday-time())/60/60/24);
echo "There are " . $d2 ." days until your birthday.";
?>