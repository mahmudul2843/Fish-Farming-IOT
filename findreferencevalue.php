<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <meta charset="utf-8">


<html>
<head>
<title>Smart fishary</title>
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
			font-size: 20px;
			table-layout: fixed;
			background: #F08080;			
			margin-top: 80px;
		}
	</style>


<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="style1.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

</head>
<body>
<div class="headersection templete clear">
<div class="logo">
<img src="img/logo1.jpg" alt=""/>
<h2>Smart Fishary Using IOT </h2>
<p>Get fishireis Related Solution</p>
</div>


</div>
<div class="navsection templete">


<ul>

<li><a href="index.html">HOME</a></li>
<li><a href="addsensorvalue.php">ADD Senor value</a></li>
<li><a href="">Real time value</a>

<ul>
<li><a href="Realtime.html">Real time sensor value</a></li>
<li><a href="clockview.html">Real time clock view</a></li>
<li><a href="findreferencevalue.php">Reference value</a></li>
</ul>

</li>
<li><a href="analysis.php">Fish suggestion</a></li>

<li><a href="graph.html">graph</a></li>




<li><a href="index.html">Analysis</a>
<ul>
<li><a href="Ruimash.php">RUI</a></li>
<li><a href="katlamash.php">KATLA</a></li>
<li><a href="pangashmash.php">PANGASH</a></li>
<li><a href="telapiamash.php">TELAPIA</a></li>
<li><a href="koimash.php">KOI</a></li>
<li><a href="prawn.php">Prawn</a></li>
<li><a href="silver.php">Silver carp</a></li>
<li><a href="sing.php">Sing</a></li>
</ul>
</li>

</ul>
</div>
<div class="slidersection templete clear">


<div class="contentsection templete clear">
<div class="maincontent clear">

<h2 style="text-align: center; color:brown">Reference values</h2>

<div class="samepost clear">

<table>
		<tr>
			<th>Id</th>
			<th>Image</th>
			<th>Name</th>
            <th>Temperature</th>
			<th>PH value</th>
			<th>CO value</th>
			<th>nh3 value</th>
			<th>Depth</th>
			<th>Turbidity</th>
		</tr>
		<?php 
         $con = mysqli_connect("sql304.epizy.com", "epiz_22958723", "fMNsROvEhT0", "epiz_22958723_fishary");
         if(!$con){
         	echo "Not Connected to DB";
         }
         else{
            echo "Connected to DB";	
         }
         $sql ="SELECT * from fixedvalue ";
         $result =mysqli_query($con,$sql);


         if ($result->num_rows >0) {
         	while ($row = mysqli_fetch_array($result)) {
         		echo 
         		"<tr>
         		<td>".$row["id1"]."</td>
				<td><img src='img/".$row["image"]. "'height=80px'></td>
				<td>".$row["name"]."</td>
				<td>".$row["tem1"]. "</td>
				<td>".$row["ph1"]. "</td>
				<td>".$row["co1"]. "</td>
				<td>".$row["nh31"]. "</td>
				<td>".$row["distance1"]. "</td>
				<td>".$row["turbidity1"]. "</td>
         		</tr>";
         	}
         	echo "</table>";
         }else
         {
         	echo "0 result";
         }

         $con->close();

		 ?>
	</table>

 </div>
		
		








	




<div class="sidebar clear">
<div class="semesidebar clear">

</div>

</div>

<div style="clear:both;"></div>
<div class="footersection templete clear">
<p>Copyright Saiful Sojib Sadman </p>
</div>



<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>