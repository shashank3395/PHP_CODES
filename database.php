<?php
$con=mysqli_connect('localhost','root','','batch');

$q="select *from student";
$res=mysqli_query($con,$q);

$n=mysqli_num_rows($res);
$arr=array();
if($n>0)
{
	while($ar=mysqli_fetch_assoc($res)){
		//echo "<pre>";
		//print_r($ar);
		$arr[]=$ar;
	}
}
	else
		echo "record not found";

?>



<!DOCTYPE html>
<html>
<body>
	<table border='1'>
		<tr>
			<th>Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>password</th>
             <th>Contact</th>
             <th>room</th>
             <th>course</th>
             <th>branch</th>
             <th>Address</th>
			</tr>
			<?php
			foreach($arr as $x=>$y)
			{
				echo "<tr>";
				foreach($y as $p=>$q)
				{
					echo "<td>$q</td>";
				}
				echo "</tr>";
			}
			?>
		</table>
</body>
</html>