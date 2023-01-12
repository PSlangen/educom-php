<!-- Start session -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.<br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
print_r($_SESSION);
$_SESSION["favcolor"] = "yellow";
echo "<br>";
print_r($_SESSION);
// Remove session variables
session_unset();
echo "<br>";
print_r($_SESSION);
// Destroy session
session_destroy();
?>


</body>
</html>