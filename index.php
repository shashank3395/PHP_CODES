
<?PHP           #Opening tag

echo "Hello world";
echo "<br>";

$a="shashank";  //every time we apply $x x will be considered as a variable
$b=10.5;
$c=67.9;        
var_dump($a);
echo "<br>";  
echo "$a";  
echo "<br>";    //<br /> whenever we want to use any html tag we will have to use echo so in order to avoid this we preferably close the php and                         again  start it whereever required 
echo "<h1>this is heading</h1>";
print("price =".'$'."$b"); 
print("<br>this is the way we use print $b to write something on web page");
//<br />//.is used for concatination of strings and
echo $c+$b;
echo "<br>";

$a=10;
if($a%2==0)
print("even$a ");
if($a%2!=0)
print("odd");
print("<br>");
print($a+$b);

print("<br>");
$d=4;
if($d==1) print("sunday");
     else if($d==2) print("monday");
     else if($d==3) print("tuesday");
     else if($d==4) print("wednesday");
     else if($d==5) print("thrusday");
     else if($d==6) print("friday");
     else if($d==7) print("saturday");
          else print("wrong number");                    
print("<br>");
 //php can use the tags of html since it is not having its own control  
//it work faster than java and .netv since the php uses the html tags which are very close to browser*/

$c='U';
if($c=='a')
     print("vowel<br>");
else if($c=='e')
     print("vowel");
 else if($c=='i')
     print("vowel");
 else if($c=='o')
     print("vowel");
 else if($c=='u')
     print("vowel");
 else if($c=='A')
     print("vowel");
 else if($c=='E')
     print("vowel");
 else if($c=='I')
     print("vowel");
 else if($c=='O')
     print("vowel");
 else if($c=='U')
     print("vowel");
else
print("consonent<br>");

?>           
  <!--now html tags will be understood this is end of php code  //we can close the php as many times we want since outside php tah it will be by default understood as html
-->

<!-- this is the html comment-->
<?PHP
$a=9;
$b=8;
$c=76;
print("<br>");
if($a>$b)
{
	if($a>$c)
		print("$a is greatest");
	else
		print("$c is greatest");
}
else if($b>$c)
print("$b is greatest");
else print("$c is greatest");


#SWITCH CASE condition statement

$d=6;
switch ($d) {
	case 1:print("sunday");
		# code...
		break;
		case 3:print("tuesday");
		
		break;
		case 4:print("wednesday");
		
		break;
		case 2:print("monday");
		
		break;
		case 5:print("thrusday");

		break;
		case 6:print("friday");

		break;
         case 7:print("saturday");

		break; 
	
	default:  print("wrong answer");
		
		break;
}




echo "<BR>";


$c='f';
switch ($c) {
	    case 'a':
		case 'e':
		case 'e':
		case 'i':
		case 'o':
		case 'u':
		case 'A':
		case 'E':
		case 'I':
		case 'O':
		case 'U':print("vowel<br>");break;
		default :print("consonent<br>");

}

#to print the multiple line print on page
echo<<<END
this is an exaxmple of multiline <br>
printing wich will consider all the <br>
line break and spaces provided by us<br>
END;


#using pre tag

echo "<pre>this is mutiline 
addition to the screen that 
will take into consider all sort 
of line break</pre>";

$xl = <<<EOD
<channel>
THIS WILL BE ASSIGNED TO  for
NO REASON
</channel>
EOD;

print ("$xl");


#print ("\n");
print "\n\n\n\n\n\n\n\n\nsee if the\t the line break";

/*this work for .php run

#multiple line string assignment to variable

$channel=<<<_XML_
this is a
multiline string 
that is assigned to channel
_XML_;
  

#this is direct display of multiline string 
echo<<<END
this will pe printed before the vari
able this 
is example of multiline string being displayed 
END;

print $channel;


#calling function in php
*/

$a=10;
function ultiply($a)
{
	$loccal=$a*10;
	global $a;
	$globbal=$a*10;
	print ("<br>local is:$loccal");
	print ("<br>global is :$globbal");
}
ultiply(5);

#date function
echo "<br>";
echo date("l,d m Y  H:i:s A");

echo "<br>";
$namesinarray=array("shashank","abs","ddfg");
foreach($namesinarray as $value)
	echo "names are $value one by one<br>";





 $n=5;
 $i=1;
 while($i<=10)
 {
 	echo "$n*$i=";
 	$p=$n*$i;   
 	echo "$p<br>";
 	$i++;
 }

$i=1;
$sum1=0;
$sum2=0;
while($i<=10)
	{  if($i%2==0)
		$sum1+=$i;
		if($i%2!=0)
        $sum2+=$i;

		$i++;}
echo $sum1;
echo "<br>$sum2"; 



























?>