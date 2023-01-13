<?php
class ClassName {
  public static $staticProp = "W3Schools";
}


class pi {
    public static $value = 3.14159;
    public function staticValue() {
        return self::$value; //class with both static and non-static properties; self
    }
}

class x extends pi {
    public function xStatic() {
      return parent::$value; //call to static property from child class using parent
    }
}

// Get static property
echo pi::$value; //classname::property name
echo "<br";

$pi = new pi();
echo $pi->staticValue();
echo "<br";

echo x::$value;
echo $x->xStatic();



?>