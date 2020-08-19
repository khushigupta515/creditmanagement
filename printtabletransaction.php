

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>MY SQL TABLE</title>
  

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
       background: #A8A8A8;
       background-image: url("tablebg.jpg");
       
       }
    </style>
    <style type="text/css">
    .exactCenter {
      
     margin : 0 auto 0 auto;
     padding-top: 10%;
 }
  </style>
    
   

  </head>
 
<body >
  <div class="container-fluid">
    <h1 class="text-center" style="background: white;padding: 0.5%;">Transaction History:</h1>
  </div>

<div class="container exactCenter">
 
<table class="table" >
 <thead class="thead-dark">
 <tr style="background: black;color: white;">
 <th >Recipient's ID</th>
 <th>Recepient's Name</th>
 <th >Benficiary's ID</th>
 <th>Benficiary's Name</th>
 <th>Credit Transfered</th>
 
 </tr>
 </thead>
 <tbody style="background: white;" >
 <?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sparkassignment";
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$sql = " SELECT * FROM transaction;";
$result = mysqli_query($conn,$sql);
	  	$resultCheck=mysqli_num_rows($result);
	  	if($resultCheck > 0){
	  		while($row=mysqli_fetch_assoc($result)){
	  		    echo "<tr>";
	  		    echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
          echo "<td>".$row['id2']."</td>";
          echo "<td>".$row['name2']."</td>";
	     		echo "<td>".$row['credit']."</td>";
	     	echo "</tr>";
	  		}
	  	   }

  	   
 ?>
 </tbody>
</table>
</div>




  
</body>
</html>