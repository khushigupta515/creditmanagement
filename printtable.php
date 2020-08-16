 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show MySQL DB Data</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
 
<table class="table table-bordered ">
 <thead class="thead-light">
 <tr>
 <th>ID</th>
 <th>Name</th>
 <th>Credit</th>
 
 </tr>
 </thead>
 <tbody class="table-striped">
 <?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sparkassignment";
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$sql = " SELECT * FROM posts;";
	  	$result = mysqli_query($conn,$sql);
	  	$resultCheck=mysqli_num_rows($result);
	  	if($resultCheck > 0){
	  		while($row=mysqli_fetch_assoc($result)){
	  		    echo "<tr>";
	  		    echo "<td>".$row['id']."</td>";
	     		echo "<td>".$row['name']."</td>";
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