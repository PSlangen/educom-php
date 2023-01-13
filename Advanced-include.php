<html>
<body>

<!-- Footer -->
<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'footer.php';?>

<!-- Menu -->
<div class="menu">
<?php include 'menu.php';?>
</div> <br>

<!-- Variables -->
<?php include 'vars.php';
echo "I have a $color $car.";
?>

<!-- Require -->
<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>

</body>
</html>

