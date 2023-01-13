<!-- Static methods; called directly without creating class first -->
<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
  public function __construct() {
    self::welcome();                //static method accessed from method in same class using self
  }
}

// Call static method
greeting::welcome(); //Classname::staticMethod();
echo "<br>";

new greeting();
echo "<br>";

class SomeOtherClass {
    public function message() {
      greeting::welcome();
    }
  }
?>



