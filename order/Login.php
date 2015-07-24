<?php
session_start();
include 'config.php';
$result=$conn->query("SELECT * FROM COMMUNITY_USER");
   while($row=$result->fetch_assoc())
   {
     if(strcmp($row['username'],$_GET['username'])==0)
     {
       if(strcmp($row['password'],$_GET['password'])==0)
       {
         $_SESSION['login']='LOGIN';
         $_SESSION['username']=$_GET['username'];
         $_SESSION['password']=$_GET['password'];

         echo "sucessfully login";
         echo "<br>";
         echo $_SESSION['username'];

       }
     }
   }
 ?>
<html>
<meta http-equiv="refresh" content="3">
<?php
include 'config.php';
      //get the id of the executive
      $id='0000';
      $sql="SELECT * FROM COMMUNITY_USER WHERE username=\"$username\"";
      $result=$conn->query($sql);
      while ($row=$result->fetch_assoc())
       {
         $id=$row['id'];

       }
      $sql="insert into online_staus values('$id','{$_SESSION['username']}','{$_SESSION['login']}')";

      $result=$conn->query($sql);
      $conn->close();





?>
<body>

</body>
</html>
