<!-- Throwing exception
<?php
// function divide1($dividend1, $divisor1) {
//   if($divisor1 == 0) {
//     throw new Exception("Division by zero");
//   }
//   return $dividend1 / $divisor1;
// }
// echo divide1(5, 0);
?>
<br> -->

<!--  Try-catch -->
<?php
function divide2($dividend2, $divisor2) {
    if($divisor2 == 0) {
      throw new Exception("Division by zero");
    }
    return $dividend2 / $divisor2;
  }
try { 
    echo divide2(5, 0);
  } catch(Exception $e) {
    echo "Unable to divide.<br>";
  } finally{
    echo "Process complete.";
  }
?>
<br><br>

<!-- Exception Object -->
<?php
function divide3($dividend3, $divisor3) {
  if($divisor3 == 0) {
    throw new Exception("Division by zero", 1);
  }
  return $dividend3 / $divisor3;
}

try {
  echo divide3(5, 0);
} catch(Exception $ex) {
  $code = $ex->getCode();
  $message = $ex->getMessage();
  $file = $ex->getFile();
  $line = $ex->getLine();
  echo "Exception thrown in $file on line $line: [Code $code]
  $message";
}
?>