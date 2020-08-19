 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CREDIT MANAGEMENT SYSTEM</title>
<!--  Bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- navbar google font -->
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
   <!-- herotext class -->
  <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
  <!-- body  -->
  <link href="https://fonts.googleapis.com/css2?family=Martel:wght@200&family=Patua+One&display=swap" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

$id = $_GET['selectionofid'];
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sparkassignment";
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$sql = "SELECT name, credit FROM posts WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
	  	if($resultCheck > 0){
	  		while($row=mysqli_fetch_assoc($result)){
	  		    
	  		    //echo $row['id']."</br>";
	     		$name= $row['name'];
	     		$credit= $row['credit'];

	     	
	  		}
	  	   }

  	   
 ?>
 <body>
 	<div class="container-fluid" id="credittransfer" style="padding-left: 0%;padding-right: 0%;" >
  <div class="jumbotron " style="margin-bottom: 0%;" >
    <h2 class="text-center">User Details</h2>
    <div class="row">
    <div class="col-sm-3"><i class="fa fa-user " aria-hidden="true" style="font-size: 200px;" ></i></div>	
    <div class="col-sm-9">
    <p>Name : <?php echo $name ;  ?> </p>
    <p>Id : <?php echo $id ;  ?> </p>
    <p>Available Credits : <?php echo $credit ;  ?> </p>
    <button style="background: #56A49C;color: black;border-radius: 20%;padding: 1%;" ><a href='formfortranfer.html' style="color:black;text-decoration: none;"> Transfer credits</a></button>
    
    <button style="background: #56A49C;color: black;border-radius: 20%;padding: 1%;margin-left: 1%; " ><a href='creditmanagement1.html' style="color:black;text-decoration: none;"> Home</a></button>
   </div>
  </div>
</div>
</div>

 


 </body>
 </html>