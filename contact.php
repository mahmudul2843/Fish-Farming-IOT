<?php 
  $fonts="verdana";
  $bgcolor="#444";
  $fontcolor="#fff";

$errName=$errGender=$errCurrent_Address=$errEmail=$errPhone_Number=$errService_Description="";
$Name=$Gender=$Current_Address=$Email=$Phone_Number=$Service_Description="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){

  if(empty($_POST["name"])){
  	$errName="<span style='color:red'>Name is required.</span>";
  	
}
else{
	$Name=val($_POST["name"]);
}

if(empty($_POST["gender"])){
$errGender="<span style='color:red'>Gender is required.</span>";
}
else{
	$Gender=val($_POST["gender"]);
}

if(empty($_POST["current_address"])){
$errCurrent_Address="<span style='color:red'>current_address is required.</span>";
}
else{
	$Current_Address=val($_POST["current_address"]);
}

if(empty($_POST["email"])){
$errEmail="<span style='color:red'>Email is required.</span>";
}
else{
	$Email=val($_POST["email"]);
}

if(empty($_POST["phone_number"])){
$errPhone_Number="<span style='color:red'>phone number is required.</span>";
}
else{
	$Phone_Number=val($_POST["phone_number"]);
}



if(empty($_POST["service_description"])){
$errService_Description="<span style='color:red'> service type is required.</span>";
}
else{
	$Service_Description=val($_POST["service_description"]);
}





$con= mysqli_connect("sql304.epizy.com", "epiz_22958723", "fMNsROvEhT0", "epiz_22958723_fishary");

 if(!$con){
 	echo "not connected to database";
 }
 else{
 	echo "connected to database";

    }
if(empty($Name &&$Gender &&$Current_Address &&$Email &&$Phone_Number &&$Service_Description)){
	echo "you have to fill all data ";
}
else{
$sql = "INSERT INTO temporary (name,gender,CurrentAddress,email,PhoneNumber,ServiceDescription) VALUES ('$Name','$Gender','$Current_Address','$Email','$Phone_Number','$Service_Description')";
$a=mysqli_query($con,$sql);
if(!$a){
	echo " not inserted data";
}
else{
	echo " successful";
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
</ul>
</li>

</ul>
</div>
<div class="slidersection templete clear">


<div class="contentsection templete clear">
<div class="maincontent clear">

<form action="contact.php" method="post">


<table>
<tr>
<td>Your Name</td>
<td><input type="text" name="name" placeholder="enter your name"/></td>
<td>*</td>
<td> <?php echo $errName;  ?> </td>
</tr>



<tr>
<td>Your Gender</td>
<td>
<input type="radio" name="gender" value="female"/>Female
<input type="radio" name="gender" value="male"/>Male	
</td>
<td>*</td>
<td> <?php echo $errGender;  ?> </td>



 	 	 

</tr>

<tr>
<td>Your current Address</td>
<td><input type="text" name="current_address" placeholder="enter current Address"/></td>
<td>*</td>
<td> <?php echo $errCurrent_Address;  ?> </td>

</tr>

<tr>
<td>Your email Address</td>
<td><input type="email" name="email" placeholder="enter email Address"/></td>
<td>*</td>
<td> <?php echo $errEmail;  ?> </td>

</tr>

<tr>
<td>your phone number</td>
<td><input type="numeric" name="phone_number" placeholder="enter phone number"/></td>
<td>*</td>
<td> <?php echo $errPhone_Number;  ?> </td>

</tr>








<tr>
<td>Your Suggestion</td>
<td><textarea name="service_description"></textarea></td>
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