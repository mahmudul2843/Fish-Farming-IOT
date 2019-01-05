<!DOCTYPE html>
<html>
<head>
	<title>Show given sensor value</title>
	<style type="text/css">
		body{
			
			background: no-repeat;
			background-size: cover;;
		}
		table, th, td{
			color: black;
			width: auto;
			margin: auto;
			border: 1px solid white;
			border-collapse:collapse;
			text-align: center;
			font-size: 30px;
			table-layout: fixed;
			background: #e67e22;			
			margin-top: 100px;
		}
	</style>
</head>
<body style="background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url(img/bg.png);">
	<h1 style="text-align: center; color: white">Show given sensor value</h1>
	<a href="index.html"><h2>Home</h2></a>
	
	<table>
		<tr>
			<th>ID</th>
            <th>DATE</th>
			<th>TEMPERATURE</th>
			<th>PH</th>
				 <th>CO</th>
				  <th>NH3</th>
				   <th>DISTANCE</th>
				 
		</tr>
	<?php  

$connect = mysqli_connect("localhost", "root", "", "fishary");  

	
$con = mysqli_connect("localhost", "root", "", "fishary");
         if(!$con){
         	echo "Not Connected to DB";
         }
         else{
            echo "Connected to DB";	
         }
		 
		 

		 
	$sql="        
	SELECT * FROM sensorvalue
	
                  ";
	
	
         $result =mysqli_query($con,$sql);
            if ($result->num_rows >0) {
         	while ($row = mysqli_fetch_array($result)) {
         		echo 
         		"<tr>
         		<td>".$row["id"]."</td>
         		<td>".$row["date"]."</td>
         		<td>".$row["tem"]."</td>
         		<td>".$row["ph"]."</td>
				<td>".$row["co"]."</td> 
				<td>".$row["nh3"]."</td> 
				<td>".$row["distance"]."</td> 
				
			  
         		
         		</tr>";
         	}
         	
         	echo "</table>";
         
		 }
         else
         {
         	echo " 0 result ";
         }

         $con->close();

?>
</body>
</html>