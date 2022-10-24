<?php 
$username=$_POST['uname'];
$password=$_POST['pass'];
if($username=='AKHIL' && $password=='12345')
{
	header("LOCATION:home.php");
}
else{
	header("LOCATION:index.php");
}
 ?>}
}
