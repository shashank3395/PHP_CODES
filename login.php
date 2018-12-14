<?php
if(isset($_POST['login']))
{
	$a=$_POST['email'];
	$b=$_POST['password'];
    
	$c="select *from room where email='$a'&& password='$b'";

	include("connection.php");
	$res=mysqli_query($con,$c);
	if($res==true)
	{ $r=mysqli_num_rows($res);

        if($r==1)
		echo "login succesful";
	    else
	    	echo "wrong password/email";
	}
	else
		echo "syntex error";
}
?>

<!DOCTYPE html>
<html>
<h1>STUDENT LOGIN</h1>
<form action="" method="post">
	Enter email-id<input type="text" name="email"><br>
	Enter password<input type="password" name="password">
    <input type="submit" name="login"> 
</form>
</html>