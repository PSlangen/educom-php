<!-- read file -->
<?php
echo readfile("webdictionary.txt");
?>
<br><br>

<!-- fopen -->
<?php
$myfile1 = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile1,filesize("webdictionary.txt"));
fclose($myfile1);
?>
<br><br>

<!-- Close -->
<?php
$myfile3 = fopen("webdictionary.txt", "r");
    // some code to be executed....
fclose($myfile3);
?>
<br><br>

<!-- Read single line -->
<?php
$myfile4 = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile4);
fclose($myfile4);
?>
<br><br>

<!-- Check end-of-file -->  
<?php
$myfile5 = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
while(!feof($myfile5)) {
  echo fgets($myfile5) . "<br>";
}
fclose($myfile5);
?>
<br><br>

<!-- Read single charachter -->
<?php
$myfile6 = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one character until end-of-file
while(!feof($myfile6)) {
  echo fgetc($myfile6);
}
fclose($myfile6);
?>

<!-- Create/Write -->
<?php
$openFile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($openFile, $txt);
$txt = "Jane Doe\n";
fwrite($openFile, $txt);
fclose($openFile);
?>

<!-- Overwriting -->
<?php
$openFile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($openFile, $txt);
$txt = "Minnie Mouse\n";
fwrite($openFile, $txt);
fclose($openFile);
?>

<!-- Append -->
<?php
$openFile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($openFile, $txt);
$txt = "Goofy Goof\n";
fwrite($openFile, $txt);
fclose($openFile);
?>
<br><br>

<!-- File Upload -->
<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>

</body>
</html>