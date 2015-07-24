<?php
include 'config.php';
$username=$_GET['username'];
$password=$_GET['password'];


$result=$conn->query("SELECT * FROM emp_users");

  

   
   	while ($row=$result->fetch_assoc())
   	 {
   	 	$target_username=$row['username'];
   	 	$target_password=$row['password'];
   	 	if(strcmp($target_username, $username)==0)
   	 	{

   	 		if (strcmp($target_password, $password)==0)
   	 		 {
   	 		 	header('Location: ./Multiple_from/');
   	 			# code...
   	 		 }


   	 		  
   	 	}
   	 		   	
   	 		
   	 	
    }   		
   
   

   

?>
	