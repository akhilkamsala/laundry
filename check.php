


<?php
session_start();
include 'privacy/config.php';
$username=$_GET['username'];
$password=$_GET['password'];


$result=$conn->query("SELECT * FROM community_user");

  

   
   	while ($row=$result->fetch_assoc())
   	 {
   	 	$target_username=$row['username'];
   	 	$target_password=$row['password'];
   	 	if(strcmp($target_username, $username)==0)
   	 	{

   	 		if (strcmp($target_password, $password)==0)
   	 		 {

               $_SESSION['username']=$username;

   	 		 	header('Location: book.php');
   	 			# code...
   	 		 }


   	 		  
   	 	}
   	 		   	
   	 		
   	 	
    }   		
   
   

   

?>
	