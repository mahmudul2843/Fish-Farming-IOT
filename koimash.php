<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <meta charset="utf-8">


<html>
<head>
<title>KOI</title>
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
			font-size: 11px;
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

<h1 style="text-align: center; color:brown">Analysis for Koi Fish</h1>

<div class="samepost clear">
<img src="img/koi.jpg" alt="post image"/>

  
	<table>
		<tr>
			
			<th>name</th>
			<th>ref ph</th>
			<th>sensor ph</th>
			<th>analysis ph</th>
			<th>ref tem</th>
			<th>sensor tem</th>
			<th>analysis tem</th>
			<th>ref co</th>
			<th>sensor co</th>
			<th>analysis co</th>
			<th>ref nh3</th>
			<th>sensor nh3</th>
			<th>analysis nh3</th>
			<th>ref depth</th>
			<th>sensor depth</th>
			<th>analysis depth</th>
			<th>sensor tur</th>
			<th>ref tur</th>
			<th>analysis turbidity</th>
			
				 
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
       ph AS analysisph,
	   tem,
	   tem AS analysistemp,
	   co,
	   co AS analysisCO,
	   nh3,
	   nh3 AS analysisNH3,
	   distance,
	   distance AS analysisdepth,
	   turbidity,
	   id1,
	   name,
	   ph1,
	   tem1,
	   co1,
	   nh31,
	   distance1,
	   turbidity1,
	   (round(ph-ph1,2)) AS consumption,(round(tem-tem1,2)) AS analysistem,(round(co-co1,2)) AS analysisco,(round(nh3-nh31,2) ) AS analysisnh3,(round(distance-distance1,2)) AS analysisdistance,
	   (round(turbidity-turbidity1,2)) AS analysister
	   
	   FROM sensorvalue,fixedvalue WHERE  id1=5 ORDER BY id DESC LIMIT 1
	   
	  
	   ";
	   
	   
	$result = mysqli_query($connect, $sql); 
	
	
        if ($result->num_rows >0) {
			
			
			
         	while ($row = mysqli_fetch_array($result)) {
         		echo 
         		"<tr>
         		
         		<td>".$row["name"]."</td>
				<td>".$row["ph1"]."</td>
			    <td>".$row["ph"]."</td>
				<td>".$row["consumption"]."</td>
         		<td>".$row["tem1"]."</td>
			    <td>".$row["tem"]."</td>
				<td>".$row["analysistem"]."</td>
				<td>".$row["co1"]."</td>
			    <td>".$row["co"]."</td>
				<td>".$row["analysisco"]."</td>
				<td>".$row["nh31"]."</td>
			    <td>".$row["nh3"]."</td>
				<td>".$row["analysisnh3"]."</td>
				<td>".$row["distance1"]."</td>
				<td>".$row["distance"]."</td>
				<td>".$row["analysisdistance"]."</td>
				<td>".$row["turbidity"]."</td>
				<td>".$row["turbidity1"]."</td>
				<td>".$row["analysister"]."</td>
				
			  
         		
         		</tr>";
				
				
				$value=(round($row["consumption"],2));
				$value1=(round($row["analysistem"],2));
				$value2=(round($row["analysisco"],2));
				$value3=(round($row["analysisnh3"],2));
				$value4=(round($row["analysisdistance"],2));
				$value5=(round($row["analysister"],2));
				$value6=(round($row["analysisph"],2));
				$value7=(round($row["analysisdepth"],2));
				$value8=(round($row["analysistemp"],2));
				$value9=(round($row["analysisNH3"],2));
				$value10=(round($row["analysisCO"],2));
			
				
				
				
			
			//analysis PH
			
			if($value6<=14 && $value6>=1){
				
				
			     if($value6<=4){
					 echo "<h3> Current  ph value  " .$value6. " ph means the Acidity of this water is high.ph 4 is Acid death point.ph 4 to 5 occure No reproduction and Slow growth of fish. So,application of 1-2 kg lame per decilam will be helpful to reduce Acidity. </h3><br>";
				 }
				 
				else if($value6>=11){
					 echo "<h3> Current  ph value  " .$value6. " ph means the Alkinity of this water is high.ph 9 to 10 occure slow growth and ph=>11 is Alkaline death point.To solve this,provide Ammonia salfet
in the water will be helpful to reduce Alkinity.</h3><br>";
				 }
			   
			   else
			     echo "<h3> Current  ph value  " .$value6. " ph means the water is good for fish.ph range 6.5-9 is good for fish.
			 Very high (greater than 9.5) or very low (less than 4.5) pH values are unsuitable for fish.</h3><br>";
			}
			
			
			
			
			if($value>=0){
			
			if($value<=1 && $value>=0){
				echo "<h3> PH level:perfect.difference only   " .$value. " ph from reference value For this fish farming. </h3><br>";
				
			     }
			
			else if ($value<=2.5 && $value>1)
			echo "<h3> PH level:good but not perfect,you should Decress :  " .$value. " ph level For this fish farming. </h3><br>";
			
			else
			{
				echo "<h3 >PH level:Not usable at all, you should Decress :  " .$value. " ph level For this fish farming </h3><br>";
				
			}
			
			}
			
			else if($value<0){
				
				if($value<0 && $value>=-1){
				echo "<h3>PH level:perfect.difference only  " .$value*(-1). " ph from reference value For this fish farming </h3><br>";
				
			    
			   
			    
			}
			
			else if ($value<=-2.5 && $value>-1)
			echo "<h3>PH level:good but not perfect,you should increase :  " .$value*(-1). " ph level For this fish farming </h3><br>";
			
			else
			{
				echo "<h3 >PH level:Not usable at all, you should increase :  " .$value*(-1). " more ph level For this fish farming </h3><br>";
				
			}
				
				}
			
			//analysis temperature
			
			
			if($value8>0){
				
				
			     if($value8<10){
					 echo "<h3> Current temperature:  " .$value8. " oC,Below 10 oC, fish stops feeding and increase severe stress, fungal infection and high mortality .</h3><br>";
				 }
				 
				else if($value8>10 && $value8<21){
					 echo "<h3> Current temperature:  " .$value8." oC,At this temperature Fish growth will significantly reduce (P<0.001) below 21 oC.</h3><br>";
				 }
			   
			   else 
			   
			     echo "<h3>Current temperature: " .$value8." oC.temperature between 22 to 36oC is good for fresh water fish farming.</h3><br>";
			   
			}
			
			
			if($value1>=0){
			if($value1<=6 && $value1>=0){
				echo "<h3>Temperature level:perfect.difference only " .$value1. " degree celcious from referance value</h3><br>";
				
			     
			   
			    
			}
			
			else if ($value1<=12 && $value1>6)
			echo "<h3>Temperature level:good but not perfect,you should decress :  " .$value1. " degree celcious temperature For this fish farming  </h3><br>";
			
			else
			{
				echo "<h3 >Temperature level:Not usable at all you should Decress :  " .$value1. " degree celcious more temperature For this fish farming </h3><br>";
				
			}
			
			}
			
			else if($value1<0){
				
				if($value1<0 && $value1>=-3){
				echo "<h3>Temperature level:perfect.difference only  " .$value1*(-1). " degree celcious from referance value For this fish farming </h3><br>";
				
			    
			   
			    
			}
			
			else if ($value1<=-6 && $value1>-3)
			echo "<h3>Temperature level:good but not perfect,you should increase : " .$value1*(-1). " degree celcious Temperature For this fish farming. </h3><br>";
			
			else
			{
				echo "<h3 >Temperature level:Not usable at all you should increase  " .$value1*(-1). " degree celcious more Temperature For this fish farming. </h3><br>";
				
			}
				
				}
			
			////analysis GAS
			
			if($value10<=350 && $value10>=250){
				echo "<h3>current CO level " .$value10. " ppm which is parfect for fish farming.</h3><br>";
			}
			
			
			else
				echo "<h3>current CO level " .$value10. " ppm which is not parfect for fish farming. co level should be in between 250-350 ppm.</h3><br>";
			
			
			if($value10<=350 && $value10>=250 && $value2>=0){
			if($value2<=80 && $value2>=0){
				echo "<h3>current CO level:perfect.difference only  " .$value2. " ppm from reference value For this fish farming.</h3><br>";
				
			    
			   
			    
			}
			
			else if ($value2<=100 && $value2>80)
			echo "<h3>current CO level:good but not perfect,you should decress :   " .$value2. " ppm co level For this fish farming.</h3><br>";
			
			else
			{
				echo "<h3 >current CO level:Not usable at all you should Decress :  " .$value2. " ppm co level more For this fish farming.</h3><br>";
				
			}
			
			}
			
			else if($value10<=350 && $value10>=250 && $value2<0){
				
				if($value2<0 && $value2>=-80){
				echo "<h3>CO level:perfect.difference only  " .$value2*(-1). " ppm from reference value For this fish farming.</h3><br>";
				
			    
			   
			    
			}
			
			else if ($value2<=-100 && $value2>-80)
			echo "<h3>CO level:good but not perfect,you should increase :  " .$value2*(-1). " ppm more For this fish farming.</h3><br>";
			
			else
			{
				echo "<h3 >CO level:Not usable at all you should increase :  " .$value2*(-1). "ppm more co For this fish farming.</h3><br>";
				
			}
				
				}
			
			
			////analysis NH3
			
	
			
			if($value9<=0.06 && $value9>=0){
				echo "<h3>current Desolved ammonia level is:  	" .$value9. " 	 ppm .Which is perfect for Fish farming.</h3><br>";
			}
			
			
			else
				echo "<h3>current Desolved ammonia level is: " .$value9. " ppm . which is not perfect.Desolved Nh3 level should be 0.02 to 0.06 ppm for fish farming.
			As little as 0.6 ppm (mg/l) free ammonia (NH3) can be toxic to many kinds of fish and shrimp, causing gill irritation and respiratory problems.</h3><br>";
			
			if($value3>=0){
			if($value3<=0.02 && $value3>=0){
				echo "<h3>current Nh3 level:perfect,difference only  " .$value3. "ppm from reference value For this fish farming.</h3><br>";
				
			    
			   
			    
			}
			
		
	
	
	
			else if ($value3<=0.04 && $value3>0.02){
			echo "<h3>current NH3 level:good but not perfect,you should Decress :  ".$value3.  " ppm more nh3 For this fish farming.</h3><br>";
			
			}
			
			else
			{
				echo "<h3 >current Nh3 level:Not usable at all you should Decress :  " .$value3. " ppm more nh3 For this fish farming.</h3><br>";
				
			}
			
			}
			
			else if($value3<0){
				
				if($value3<0 && $value3>=-0.02){
				echo "<h3>Nh3 level:perfect,difference only  " .$value3*(-1). " ppm nh3 For this fish farming.</h3><br>";
				
			    
			   
			    
			}
			
			else if ($value3<=-0.04 && $value3>-0.02)
			echo "<h3>NH3 level:good but not perfect,you should Add :  " .$value3*(-1). " ppm more nh3 For this fish farming.</h3><br>";
			
			else
			{
				echo "<h3 >Nh3 level:Not usable at all you should increase :  " .$value3*(-1). " ppm more nh3 For this fish farming.</h3><br>";
				
			}
				
				}
			
				//analysis Depth
				
				if($value7<=10 && $value7>=1){
				
				
			     if($value7<=1.5){
					 echo "<h3> Current  depth   " .$value7. " feet,at this Fish weight become lowest (250 g per fish), feed conversion  poor and mortality become highest (41.5%) at this depth . </h3><br>";
				 }
				 
				else if($value7>1.5 && $value7<=6.5){
					 echo "<h3> Current  depth  " .$value7." feet,at this weight gain increase to 348-362 g per fish, feed conversion improve to 2.53-2.59% and mortality reduced to 21-27%. </h3><br>";
				 }
			   
			   else 
			   
			     echo "<h3>Current  depth  " .$value7." feet . mortality rate significantly reduce at 9.5 feet depth</h3><br>";
			   
			}
				
				
				
				
				
			if($value4>=0){
			if($value4<=1.5 && $value4>=0){
				echo "<h3>Depth level:perfect.difference from reference value only:  " .$value4. " feet For this fish farming. </h3><br>";
				
			     
			   
			    
			}
			
			else if ($value4<=2.5 && $value4>1.5)
			echo "<h3>Depth level:good but not perfect,you should Decress :  " .$value4. " feet more Depth For this fish farming.</h3><br>";
			
			else
			{
				echo "<h3 >Depth level:Not usable at all you should Decress :  ".$value4." feet more Depth For this fish farming.</h3><br>";
				
			}
			
			}
			
			else if($value4<0){
				
				if($value4<0 && $value4>=-1.5){
				echo "<h3>Depth level:perfect.difference from reference value only:  " .$value4*(-1). " feet Depth For this fish farming.</h3><br>";
				
			    
			   
			    
			}
			
			else if ($value4<=-2.5 && $value4>-1.5)
			echo "<h3>Depth level:good but not perfect,you should  Add :  " .$value4*(-1). " feet more Depth For this fish farming.</h3><br>";
			
			else
			{
				echo "<h3 >Depth level:Not usable at all you should ADD :  " .$value4*(-1). " feet more Depth For this fish farming.</h3><br>";
				
			}
				
				}
			
			
			
			
			
			
			
			//analysis Turbidity
			
			if($value5>=0){
			
			if($value5<=2 && $value5>=0){
				echo "<h3> Turbidity level:perfect.difference only   " .$value5. " Ntu from reference value For this fish farming. </h3><br>";
				
			     
			   
			    
			}
			
			else if ($value5<=5 && $value5>2)
			echo "<h3>Turbidity level:good but not ferfect,you should Decress :  " .$value5. " Ntu level.to solve this application of  1.2 kg of Straw per decilam will be helpful.</h3><br>";
			
			else
			{
				echo "<h3 >Turbidity level:Not usable at all, you should Decress :  " .$value5. " ntu level.to solve this application of  240-250g of fitkiri per decilam will helpful.</h3><br>";
				
			}
			
			}
			
			else if($value5<0){
				
				if($value5<0 && $value5>=-2){
				echo "<h3>Turbidity level:perfect.difference only  " .$value5*(-1). " Ntu from reference value For this fish farming.</h3><br>";
				
			    
			   
			    
			}
			
			else if ($value5<=-5 && $value5>-2)
			echo "<h3>Turbidity level:good but not perfect,you should increase :  " .$value5*(-1). " Ntu level.to solve this application of  1.2 kg of Straw per decilam will be helpful.</h3><br>";
			
			else
			{
				echo "<h3>Turbidity level:Not usable at all, you should increase :  " .$value5*(-1). "ntu more Turbidity level.to solve this application of  240-250g of fitkiri peer decilam will helpful.</h3><br>";
				
			}
				
				}
				
				
				
				
				
			
			
			
			
			
			
			
			
         	}
         	
         	echo "</table>";
			
			
			
         
		 }
         	
			 else
         	echo " 0 result ";
         

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