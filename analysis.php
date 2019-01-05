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
			margin-top: 60px;
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

<h2 style="text-align: center; color:brown">show suggestion of fish ranking which can be cultivate after analysis the most recent sensor value</h2>

<div class="samepost clear">

<table>
		<tr>
			
			
			<th>name</th>
			<th>Image</th>
		    <th>% of total Reference value Matching over total sensor value</th>
		    <th>% of total sensor value Matching over total reference value</th>
			
			
				 
		</tr>
	<?php  

$connect = mysqli_connect("sql304.epizy.com", "epiz_22958723", "fMNsROvEhT0", "epiz_22958723_fishary");  

	
$con = mysqli_connect("sql304.epizy.com", "epiz_22958723", "fMNsROvEhT0", "epiz_22958723_fishary");
         if(!$con){
         	echo "Not Connected to DB";
         }
         else{
            echo "Connected to DB";	
         }
		 
		 

		 
	$sql="        
	SELECT id,  
       date, 
       ph,
	   tem,
	   co,
	   nh3,
	   distance,
	   turbidity,
	   id1,
	   name,
	   image,
	   ph1,
	   tem1,
	   co1,
	   nh31,
	   distance1,
	   turbidity1,
	   
	    (round(ph+tem+co+nh3+distance+turbidity,2)) AS analysiss,(round(ph1+tem1+co1+nh31+distance1+turbidity1,2)) AS analysisr,
		
		
		IF( ph1+tem1+co1+nh31+distance1+turbidity1 <= ph+tem+co+nh3+distance+turbidity,
	  round((ph+tem+co+nh3+distance+turbidity)-(ph1+tem1+co1+nh31+distance1+turbidity1),2),0) AS df,
	  
	  IF( ph1+tem1+co1+nh31+distance1+turbidity1 > ph+tem+co+nh3+distance+turbidity,
	  round((ph1+tem1+co1+nh31+distance1+turbidity1)-(ph+tem+co+nh3+distance+turbidity),2),0) AS df1,
	   
	  
	 IF( ph1+tem1+co1+nh31+distance1+turbidity1 <= ph+tem+co+nh3+distance+turbidity,
          round((ph1+tem1+co1+nh31+distance1+turbidity1)*100/(ph+tem+co+nh3+distance+turbidity),2) ,0 ) AS p ,
		 
		  
       
	  IF( ph1+tem1+co1+nh31+distance1+turbidity1 > ph+tem+co+nh3+distance+turbidity,
          round((ph+tem+co+nh3+distance+turbidity)*100/(ph1+tem1+co1+nh31+distance1+turbidity1),2) ,0 ) AS p1
		  
	 
	  
	  
	 
	 
	 FROM sensorvalue,fixedvalue ORDER BY id DESC,df ASC,df1 ASC LIMIT 8
	
       ";
	
         $result =mysqli_query($con,$sql);
            if ($result->num_rows >0) {
         	while ($row = mysqli_fetch_array($result)) {
         		echo 
         		"<tr>
         		
                
         		<td>".$row["name"]."</td>
					<td><img src='img/".$row["image"]. "'height=80px'></td>
				
				
				<td>".$row["p"]."</td>
				<td>".$row["p1"]."</td>
				
				
							
				
			  
         		
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