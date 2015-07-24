<?php 
include 'config.php';
$sql="INSERT INTO customer_orders (`BATHROOMS`, `BEDROOMS`, `DATE`, `EXTRA`, `LAUNDRY`, `NAME`, `TIME`, `TIMESTAMP`, `USERNAME`, `status`, `order_date`) VALUES (, '1', '1', '', '', '', '', '', NOW(), '', 'Created', '')";
for($i=0;$i<100000;$i++)
{
$result=$conn->query($sql);


if($result=== TRUE)
{
	echo "sucess";
}
}




?>