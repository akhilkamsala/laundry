<?php

include 'config.php';



$id=$_GET['id'];

$sql="UPDATE CUSTOMER_ORDERS SET status='finished' where ORDER_ID=$id";

$conn->query($sql);
header("Location:appointments.php");



?>