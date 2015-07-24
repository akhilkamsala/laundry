<?php 
session_start();
echo $_SESSION['name'];
echo "<br>";
echo $_SESSION['email'];
echo "<br>";
echo $_GET['password'];
echo "<br>";
echo $_GET['text'];
echo "<br>";
 ?>