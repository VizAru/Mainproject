<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $to = $_POST['to'];
      $sub = $_POST['sub']; 
      $msg = $_POST['bdy'];
	  $name = $_SESSION['user'];
	  
	   $sql = "INSERT INTO ".$to."( mail, subject, body) VALUES( '$name','$sub','$msg')";
	   if(mysqli_query($db,$sql))
{
	 header("location: compose.php");
}
else
{
	echo mysqli_error($db);
}
}
?>