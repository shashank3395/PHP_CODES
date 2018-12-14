<?php

session_start();

if(empty($_SESSION['login_name']))
{
	echo "Session expired";
}
else
{
$x=$_SESSION['login_name'];
	
echo "You are logged-in with $x";
}

?>