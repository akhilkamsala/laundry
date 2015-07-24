<?php
$server="localhost";
$username="root";
$password="";
$database="homekeeping";
$conn=new mysqli($server,$username,$password,$database);
if($conn->connect_error)
{
	//echo "ERROR";
} 
else
{
	//echo "NO ERROR";
}


?>