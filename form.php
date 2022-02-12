<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample 1";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $name = $_POST['name'];
   $gender = $_POST['gender'];
  $email = $_POST['email'];
   $phno =  $_POST['phno'];
  $sql = "INSERT INTO `sample 1` (`ID`, `User Name`, `Gender`, `E-mail`, `Phone Number`) VALUES ('0','$name', '$gender', '$email','$phno')";
  // use exec() because no results are returned
 $result= $conn->exec($sql);
 if($result)
 {
  echo "New record created successfully";
 }
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>