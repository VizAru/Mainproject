<?php

 include("config.php");
if(!$db)
{
	die('Connection failed!'.mysqli_error($db));
}

$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['psw'];
$sql = "INSERT INTO register( name, email, password) VALUES( '$name','$email','$pwd')";
$sql2 = "CREATE TABLE ".$email."(mail VARCHAR(25),subject VARCHAR(50),body VARCHAR(100) NOT NULL)";
if(mysqli_query($db,$sql2))
{
if(mysqli_query($db,$sql))
{
	 header("location: login.html");
}}
else
{
	echo mysqli_error($db);
}

?>