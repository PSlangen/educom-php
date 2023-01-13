<html>
<head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

// Create database
// $create = "CREATE DATABASE ajax_demo";
//     if ($conn->query($create) === TRUE) {
//         echo "Database created successfully";
//     } else {
//         echo "Error creating database: " . $conn->error;
//     }

// sql to create table
// $sql = "CREATE TABLE ajax_demo (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     FirstName VARCHAR(30) NOT NULL,
//     LastName VARCHAR(30) NOT NULL,
//     Age VARCHAR(10),
//     Hometown VARCHAR (30), 
//     Job VARCHAR(30)
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table ajax_demo.user created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }

// Insert Data
// $sql = "INSERT INTO ajax_demo (FirstName, LastName, Age, Hometown, Job)
// VALUES ('Peter', 'Griffin', '41', 'Quahog', 'Brewery')";
// $sql = "INSERT INTO ajax_demo (FirstName, LastName, Age, Hometown, Job)
// VALUES ('Lois', 'Griffin', '40', 'Newport', 'Piano Teacher')";
// $sql = "INSERT INTO ajax_demo (FirstName, LastName, Age, Hometown, Job)
// VALUES ('Joseph', 'Swanson', '39', 'Quahog', 'Police Officer')";
// $sql = "INSERT INTO ajax_demo (FirstName, LastName, Age, Hometown, Job)
// VALUES ('Glenn', 'Quagmire', '41', 'Quahog', 'Pilot')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
?>

<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getuser.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="1">Peter Griffin</option>
  <option value="2">Lois Griffin</option>
  <option value="3">Joseph Swanson</option>
  <option value="4">Glenn Quagmire</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>