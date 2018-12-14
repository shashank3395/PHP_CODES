
<?PHP
#to tell us the os and web browser we are using
$viewer=getenv("HTTP_USER_AGENT");
$browser="an unidentified browser";
if(preg_match("/MSIE/i","$viewer"))
$browser="internet explorer";
else if(preg_match("/Chrome/i","$viewer"))
$browser="Google chrome";

$platform="An unidentified network";
if(preg_match("/Windows/i","$viewer"))
$platform="Microsoft Windows";
else if(preg_match("/Linux/i","$viewer"))
$platform="Linux";

echo "you are using $platform and $browser";

#to display the random images in browser

/*srand();
$num=rand(1,2);
switch ($num) 
{
	case '1':
	                $image_file="C:\xampp\htdocs\batch\image\mm.jpg";	
		break;
	
    case '2':
    	            $image_file="C:\xampp\htdocs\batch\image\i.jpg";
    	break;

    default :      $image_file="C:\xampp\htdocs\batch\image\e.jpg";	

}
echo "<br>random image:<img src=$image_file>";
*/
#use of numeric array


$a=array(19,30);
$a[19]=34;
$b=sizeof($a);
echo "<br>$b<br>";
foreach ($a as $key => $value) {
	echo "$key index has $value<br>";
}

#using assosiative array

$ar=array("name"=>"shashank","course"=>"php","roll no"=>48);
$are=array("name"=>"ayush","course"=>"android","roll no"=>89);
foreach ($ar as $key => $value) 
{
	echo "$key index has $value<br>";
}
?>
<!--using the table with php to show the array content-->
<table border="1">
	<tr>
		<th>Name</th>
		<th>Course</th>
		<th>Roll no</th>
	</tr>	
    <tr>
<?PHP

 foreach ($ar as $key => $value) {
 	echo "<td>$value</td>";
 }
 echo "<br></tr><tr>";
 foreach ($are as $key => $value) {
 	echo "<td>$value</td>";
 }
echo "</tr></table>";



#2 dimentional array

$arr=array("a1"=>array("name"=>"shashank",
                        "course"=>"php",
                         "rollno"=>34),
            "a2"=>array("name"=>"ayush",
                         "course"=>"android",
                          "rollno"=>98),
            "a3"=>array("name"=>"pramod",
                         "course"=>"cad",
                         "rollno"=>44)
);                              //we can write this in other format also
?>
<br>
<hr>
<table border="2">
	<tr>
		<th>Name</th>
		<th>Course</th>
		<th>rollno</th>
	</tr>
	<tr>
<?PHP
foreach ($arr as $key => $value) {
	
		foreach ($value as $key1 => $value1) 
		{
			echo "<td>".$value1."</td>";
		}
	echo "</tr><tr>";
	}
	echo "</tr></table>";
echo "<pre>";
print_r($arr);
var_dump($arr);
echo "</pre>";
echo "<pre>";
echo "fkjkfsn		NDMMNJFVKVFDV
DVKNDVVDNKVNKV
DJBDNVMLD,,VDNKNDKVDV
DFKFNJDVNMDKVLSLDV SVMSLVKVN";
echo "</pre>";


function facto($a)
{$fact=1;
	for($i=$a;$i>=1;$i--)
		$fact*=$i;
	print $fact;
}
facto(6);

$a=10;
function square(&$a)
{
	$a=$a*$a;
	return $a;
}
$after=square($a);
echo "<br>".$after;


?>

