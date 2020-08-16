<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sparkassignment";
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

//obtaining data from the form
$transferfrom = $_GET['transferfrom'];
$transferto = $_GET['transferto'];
$credit1 = $_GET['credit'];

//updating transferto variable's credit
$sql = "UPDATE posts SET credit=credit-'$credit1' WHERE name='$transferfrom';";
if ($conn->query($sql) === TRUE) {
  echo "Transfered successfully"."<br>";
} else {
  echo "Error updating record: " . $conn->error;
}
//updating transferfrom variable's credit
$sql = "UPDATE posts SET credit=credit+'$credit1' WHERE name='$transferto';";
if ($conn->query($sql) === TRUE) {
  echo "Recieved successfully"."<br>";
} else {
  echo "Error updating record: " . $conn->error;
}
