<?php
session_start();
//$_SESSION['username']="admin";


include 'config.php';


 ?>


<!DOCTYPE html>
<html>
<head>

<meta http-equiv="refresh" content="30">

<style type="text/css">
	a:hover
	{
		background-color: white;
		color: black;
	}
</style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="style="font-family:'Lato';font-weight:100;paddding:1px 1px 1px"">

<div class="container-fluid" style="background-color:#607D8B;color:white"><a href="index.php" style="color:white;"><h1 style="font-family:'Lato';font-weight:100;paddding:1px 1px 1px">Dashboard</h1></div></a>
<!--<p class="pull-right" style="color:black"></p> -->

<div class="container-fluid" style="background-color:#607D8B;color:black;padding:1px 10px 10px 10px;">&nbsp;&nbsp;
	<a href="appointments.php" style="background-color:black;color:white;border-radius:5px;padding:5px 5px 5px 5px;">  APPOINTMENTS  </a>&nbsp;&nbsp;
	<a href="appointmentstobefinished.php" style="background-color:black;color:white;border-radius:5px;padding:5px 5px 5px 5px;">  APPOINTMENTS TO BE FINISHED  </a>&nbsp;&nbsp;
	<a href="finished.php" style="background-color:black;color:white;border-radius:5px;padding:5px 5px 5px 5px;">   APPOINTMENTS  FINISHED   </a>&nbsp;&nbsp;
		<a href="#" style="background-color:black;color:white;border-radius:5px;padding:5px 5px 5px 5px;">   USER PROFILES  </a>
		
	
</div>

</div>
<div class="container-fluid" >

<?php
//get the orders and display it in the form of the table
$sql1= "select * from customer_orders where TIMESTAMP>=CURDATE()";

$metric=$conn->query($sql1);

$sql="select * from customer_orders where STATUS='created'";

$result=$conn->query($sql);




if($result->num_rows > 0)
	{
		echo "<table class=\"table\" style=\"font-size:12px;\">";
      
            echo "<tr>";
            echo "<th>";
			echo  "SNO";
			echo  "</th>";
	     	echo "<th>";
			echo  "ORDER_ID";
			echo  "</th>";

			echo "<th>";
			echo  "BATHROOMS";
			echo  "</th>";

			echo "<th>";
			echo  "BEDROOMS";
			echo  "</th>";

			echo "<th>";
			echo  "Laundry";
			echo  "</th>";

			echo "<th>";
			echo  "EXTRA";
			echo  "</th>";

			echo "<th>";
			echo  "NAME OF THE CUSTOMER";
			echo  "</th>";

			echo "<th>";
			echo  "APPOINTMENT_TIME";
			echo  "</th>";

			echo "<th>";
			echo  "APPOINTMENT_DATE";
			echo  "</th>";

			echo "<th>";
			echo  "USERNAME";
			echo  "</th>";

			/**echo "<th>";
			echo  "BOOKED AT";
			echo  "</th>";
			**/

			echo "<th>";
			echo  "STATUS";
			echo  "</th>";
            
            




            echo "</tr>";
          $i=$result->num_rows;
						
		while($row=$result->fetch_assoc())

		{


			$id=$row['ORDER_ID'];
			echo "<tr>";

            echo "<td>";
            echo $i;
            echo "</td>";

            echo "<td>";
            echo $row['ORDER_ID'];
            echo "</td>";

            echo "<td>";
            echo $row['BATHROOMS'];
            echo "</td>";
            
            echo "<td>";
            echo $row['BEDROOMS'];
            echo "</td>";
            
            echo "<td>";
            echo $row['LAUNDRY'];
            echo "</td>";

            echo "<td>";
            echo $row['EXTRA'];
            echo "</td>";
            
            echo "<td>";
            echo $row['NAME'];
            echo "</td>";
            
            echo "<td>";
            echo $row['TIME'];
            echo "</td>";
            
            echo "<td>";
            echo $row['DATE'];
            echo "</td>";
            
            echo "<td>";
            echo $row['USERNAME'];
            echo "</td>";

            /**echo "<td>";
            echo $row['TIMESTAMP'];
            echo "</td>";
            **/

             echo "<td>";
            echo $row['status'];
            echo "</td>";
            
            
             echo "<td>";
            echo "[<a href=\"view.php?id=$id\">View</a>]";
            echo "</td>";


               echo "<td>";
            echo "[<a href=\"Assign.php?id=$id\">Assign</a>]";
            echo "</td>";
            


             echo "<td>";
            echo "[<a href=\"complete.php?id=$id\">Complete</a>]";
            echo "</td>";
            
            


			echo "<tr>";

			$i--;
            
        }
        
    }

echo "</table>";



$conn->close();
?>





</div>

</body>
</html>