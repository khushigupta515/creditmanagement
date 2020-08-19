<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>CREDIT MANAGEMENT SYSTEM</title>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- navbar google font -->
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
   <!-- herotext class -->
  <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
  <!-- body  -->
  <link href="https://fonts.googleapis.com/css2?family=Martel:wght@200&family=Patua+One&display=swap" rel="stylesheet">
  

    <!-- External Style Sheet -->
    <link rel="stylesheet" type="text/css" href="stylespark.css">
    <style type="text/css">
      body
      {margin: 0;
       padding: 0;
       }
    </style>
    
   

  </head>


<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sparkassignment";
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

$username = $_GET['username'];
$credit = $_GET['credit'];

$sql = "INSERT INTO posts (name, credit)
VALUES ('$username', '$credit');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<body>
 <div class="container-fluid" id="viewuser" style="padding-left: 0%;padding-right: 0%;" >
  <div class="jumbotron text-center" style="margin-bottom: 0%;" >
    <h2 class="text-center">Manage your Credits</h2>
    <p>Click to view the list of users and their credits</p>
    <button style="background: #56A49C;color: black;border-radius: 20%;padding: 1%;"><a href='printtable.php' style="color:black;text-decoration: none;">View Users</a></button>
    <button style="background: #56A49C;color: black;border-radius: 20%;padding: 1%;margin-left: 1%; " ><a href='creditmanagement1.html' style="color:black;text-decoration: none;"> Home</a></button>
  </div>
  </body>
