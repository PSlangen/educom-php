<!-- Return Length -->
<?php
echo strlen("Hello world!"); // outputs 12
?>

<!-- Count Words -->
<?php
echo str_word_count("Hello world!"); // outputs 2
?>

<!-- Reverse -->
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>

<!-- Search Text -->
<?php
echo strpos("Hello world!", "world"); // outputs 6
?>

<!-- Replace Text -->
<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>

