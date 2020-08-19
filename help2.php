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

//obtaining data from the form
$transferfrom = $_GET['transferfrom'];
$transferto = $_GET['transferto'];
$credit1 = $_GET['credit'];

$sql2 = " SELECT credit FROM posts WHERE id='$transferfrom';";
$result = mysqli_query($conn,$sql2);
while($row=mysqli_fetch_assoc($result)){
	$ab=$row['credit'];
}
if($credit1 > $ab)
 {	echo '<script>alert("Amount exceeds the credit in users account,Transfer Unsuccessful")</script>';
	
}

else
{$sql2 = " SELECT name FROM posts WHERE id='$transferfrom';";
$result = mysqli_query($conn,$sql2);
while($row=mysqli_fetch_assoc($result)){
	$name1=$row['name'];
 }
 $sql2 = " SELECT name FROM posts WHERE id='$transferto';";
$result = mysqli_query($conn,$sql2);
while($row=mysqli_fetch_assoc($result)){
	$name2=$row['name'];
 }

$sql = "INSERT INTO transaction (id, id2,name,name2, credit)
VALUES ('$transferfrom', '$transferto','$name1','$name2','$credit1');";
$result = mysqli_query($conn,$sql);
//updating transferto variable's credit
$sql = "UPDATE posts SET credit=credit-'$credit1' WHERE id='$transferfrom';";
if ($conn->query($sql) === TRUE) {
  echo "Transfered successfully"."<br>";
  
} else {
  echo "Error updating record: " . $conn->error;
}

//updating transferfrom variable's credit
$sql = "UPDATE posts SET credit=credit+'$credit1' WHERE id='$transferto';";
if ($conn->query($sql) === TRUE) {
  echo "Recieved successfully"."<br>";
} else {
  echo "Error updating record: " . $conn->error;
  }
}
?>


<html>
<body>
<div class="container-fluid" id="viewuser" style="padding-left: 0%;padding-right: 0%;" >
  <div class="jumbotron text-center" style="margin-bottom: 0%;" >
    <h2 class="text-center">Manage your Credits</h2>
    <p>Click to view the list of users and their credits</p>
    <button style="background: #56A49C;color: black;border-radius: 20%;padding: 1%;"><a href="printtable.php" style="color:black;text-decoration: none;">View Users</a></button>
    <button style="background: #56A49C;color: black;border-radius: 20%;padding: 1%;margin-left: 1%; " ><a href="creditmanagement1.html" style="color:black;text-decoration: none;"> Home</a></button>
  </div>
  <div class="container-fluid" id="viewuser" style="padding-left: 0%;padding-right: 0%;" >
  <div class="jumbotron text-center" style="margin-bottom: 0%;" >
    <h2 class="text-center">View Transaction History</h2>
    <p>Click to view the list of users and their credits transfered</p>
    <button style="background: #56A49C;color: black;border-radius: 20%;padding: 1%;"><a href='printtabletransaction.php' style="color:black;text-decoration: none;">View Transaction History</a></button>
  </div>

</body>
</html>
