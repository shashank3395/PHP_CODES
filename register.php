<?php
if(isset($_POST['register']))
{
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['password'];
$d=$_POST['contact'];
$e=$_POST['room'];
$f=$_POST['course'];
$g=$_POST['branch'];
$h=$_POST['address'];


//to establish the connection bw database and php

//$con=mysqli_connect('localhost','root','','batch') or die('some error');//to show simple error message
//to show an error so that it is executed furthur in case any error is caused

$con=mysqli_connect('localhost','root','','batch') or die( mysqli_error($con));//to show exact error


//query to insert the data into the mysql database
$q="insert into room(name,email,password,contact,room,course,branch,address) values('$a','$b','$c','$d','$e','$f','$g','$h')";
//query is stored in string datatype
//to run the query

$result=mysqli_query($con,$q) or die(mysqli_error($result));//to show the error or to make sure if data is inserted then $result is true else $result is false
if($result==true)
echo "registered succesfully ";
else
echo "try again";
}
?>
<!DOCTYPE HTML>
<html>
<body>
<font face="boston traffic" color="#19F" size="100" ><center>REGISTRATION FORM</center></font>
<hr>
<form action="register.php" method="post">
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font color="#92F" size="100">Name :</font> <input type="text" name="name"><br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font color="#92F" size="100">Email :</font> <input type="text" name="email"><br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font color="#92F" size="15">Password :</font> <input type="Password" name="password"><br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font color="#92F" size=15>Contact :</font> <input type="text" name="contact"><br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font color="#92F" size=15>Room :</font> <input type="text" name="room"><br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font color="#92F" size=15>Course :</font> <input type="text" name="course"><br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font color="#92F" size=15>Branch :</font> <input type="text" name="branch"><br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <font color="#92F" size=15>Address :</font> <textarea 
name="address"></textarea><br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="submit" name="register">
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="reset" name="reset">
</form>
</body>
</html>
