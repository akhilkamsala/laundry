
<?php

session_start();
include 'privacy/config.php';
$_SESSION['NAME']="";
$extra=$_POST['extra'];
$date=(string)$_POST['date'];
$time=(string)$_POST['time'];


//code to place orders data into the database
$conn->query("INSERT INTO CUSTOMER_ORDERS (USERNAME,NAME,BATHROOMS,BEDROOMS,LAUNDRY,EXTRA,DATE,TIME,TIMESTAMP) VALUES ('{$_SESSION['username']}','{$_SESSION['NAME']}','{$_SESSION['BATHROOMS']}','{$_SESSION['BEDROOMS']}','{$_SESSION['LAUNDRY']}','$extra','$date','$time',NOW())");
$conn->close();
?>





<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	a
	{
		color:aqua;
	}
	a:visited
	{
		color:aqua;
	}

</style>
 <link rel="icon"
      type="image/.jpg"
      href="img/clean.jpg">
	<title>
    www.wash.me

	</title>


	<!-- BOOTSTRAP CDN -->
<meta >

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</head>  
<body style="color:white">    
</div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12" style="background-color:white;height:100px;">

<h1 style="color:black;font-family:'Lato';font-weight:100;color:black;font-size:40px;color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROFFESIONAL STYLE CLEANING</h1>
<a href="#"><img  src="img/clean.png" height="100px" style="padding:10px 10px 10px;" class="pull-right"></a>
</div>
</div>
</div>

<div class="container-fluid" style="height:400px;background-color:#5C6BC0;">
<h1 style="color:white;font-family:'Lato';font-weight:100;font-size:20px"><center>THANK YOU ONE OF OUR EXECUTIVE WILL CONTACT YOU VERY SOON IN ORDER TO CONFIRM AGIAN</center><br>
<center>WE ARE HAPPPY TO SERVER YOU ALL TIME</center></h1>

<div class="container-fluid pull-left" style="width:500px;background-color:white;height:280px">
<h1 style="color:black;font-family:'Lato';font-weight:200;font-size:20px">
CONTACT US	
<pre>
CLEAN
Dno:28/5 Ejipura
Koramangala
Banglaore-560027
</pre>
</h1>
	
</div>
</div>
<?php
session_destroy(); 
?>
</body>