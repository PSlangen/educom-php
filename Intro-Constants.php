<!-- Create a constant -->
<?php
define("GREETING1", "Welcome to W3Schools.com!");
echo GREETING1;
?>
<br>

<!-- Constant Arrays -->
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
<br>

<!-- Constants are global -->
<?php
define("GREETING3", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING3;
}
 
myTest();
?>
<br>

<!-- Case insensitive not allow anymore??? -->
<?php
define("GREETING2", "Welcome to W3Schools.com!", true);
echo greetings2;
?>
