<?php 
  $fonts="verdana";
  $bgcolor="#444";
  $fontcolor="#fff";

$errDate=$errTem=$errPh=$errCo=$errNh3=$errDistance=$errTurbidity="";
$date=$tem=$ph=$co=$nh3=$distance=$turbidity="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){

  if(empty($_POST["date"])){
  $errDate	="<span style='color:red'>Date is required.</span>";
  	
}
else{
	$date=val($_POST["date"]);
}

if(empty($_POST["tem"])){
$errTem="<span style='color:red'>Temperature is required.</span>";
}
else{
	$tem=val($_POST["tem"]);
}

if(empty($_POST["ph"])){
$errPh="<span style='color:red'>PH is required.</span>";
}
else{
	$ph=val($_POST["ph"]);
}

if(empty($_POST["co"])){
$errCo="<span style='color:red'>CO is required.</span>";
}
else{
	$co=val($_POST["co"]);
}

if(empty($_POST["nh3"])){
$errNh3="<span style='color:red'>NH3 number is required.</span>";
}
else{
	$nh3=val($_POST["nh3"]);
}



if(empty($_POST["distance"])){
$errDistance="<span style='color:red'> Depth is required.</span>";
}
else{
	$distance=val($_POST["distance"]);
}

if(empty($_POST["turbidity"])){
$errTurbidity="<span style='color:red'> turbidity is required.</span>";
}
else{
	$turbidity=val($_POST["turbidity"]);
}




$con= mysqli_connect("sql304.epizy.com", "epiz_22958723", "fMNsROvEhT0", "epiz_22958723_fishary");

 if(!$con){
 	echo "not connected to database";
 }
 else{
 	echo "connected to database";

    }
if(empty($date &&$tem &&$ph &&$co &&$nh3 &&$distance &&$turbidity)){
	echo " you have to fill all data ";
}
else{
$sql = "INSERT INTO sensorvalue (date,tem,ph,co,nh3,distance,turbidity) VALUES ('$date','$tem','$ph','$co','$nh3','$distance','$turbidity')";
$a=mysqli_query($con,$sql);
if(!$a){
	echo "  not inserted data";
}
else{
	echo "  inserted data successfuly ";
}

}

}


function val($data){

$data=trim($data);
$data=stripcslashes($data);
$data=htmlspecialchars($data);
return $data;
}



   





?>

<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <meta charset="utf-8">


<html>
<head>
<title>Smart fishary</title>

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

<form action="addsensorvalue.php" method="post" enctype="multipart/form-data">


<table>
<tr>
<td>Dtae</td>
<td><input type="text" name="date" placeholder="enter Date"/>d/m/y</td>
<td>*</td>
<td> <?php echo $errDate;  ?> </td>
</tr>



<tr>
<td>Temperature</td>
<td><input type="text" name="tem" placeholder="enter Temperature"/>oC</td>
<td>*</td>
<td> <?php echo $errTem;  ?> </td>



 	 	 

</tr>

<tr>
<td>PH</td>
<td><input type="text" name="ph" placeholder="enter Ph"/>ph</td>
<td>*</td>
<td> <?php echo $errPh;  ?> </td>

</tr>

<tr>
<td>CO</td>
<td><input type="text" name="co" placeholder="enter Co"/>ppm</td>
<td>*</td>
<td> <?php echo $errCo;  ?> </td>

</tr>

<tr>
<td>NH3</td>
<td><input type="text" name="nh3" placeholder="enter NH3"/>ppm</td>
<td>*</td>
<td> <?php echo $errNh3;  ?> </td>

</tr>


<tr>

<td>Depth</td>
<td><input type="text" name="distance" placeholder="enter Depth"/>feet</td>
<td>*</td>
<td> <?php echo $errDistance;  ?> </td>


</tr>
<tr>

<td>Turbidity</td>
<td><input type="text" name="turbidity" placeholder="enter turbidity"/>ntu</td>
<td>*</td>
<td> <?php echo $errDistance;  ?> </td>


</tr>




<tr>
<td></td>
<td><input type="submit" name="submit" value="submit"/></td>
</tr>

</table>

</form>






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









