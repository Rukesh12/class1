<?php
$name="Rukesh Dhakal";
$name.=" goes to college";
$name.=" and play football";
echo $name;
?>

<?php
echo"<br>";
$short_string="this string has 29 characters";
print("It does not have".strlen($short_string)."character");
?>

<?php
$twister="peter price piper picked a peck of pickled pappers";
print("location of 'p' is".strpos($twister,'p').'<br>');
print("location of 'p' is".strpos($twister,'p').'<br>');
?>

<?php
$string1="hello world";
$string2="hello world,Nepal";
$result=strcasecmp($string1,$string2);
if($result!=0)
{
	echo "the strting do not match";

}
else
{
	echo "the string match";
}

//strtolower
//strtoupper
//ucfirst
//strrev
//ucwords
//lcfirst
//wordwrap
//trim
?>


<?php
$mystring="develop php is the best place for beginners to learn PHP";
$mystring= wordwrap($mystring,24,"<br/>",true);
echo $mystring;
echo "<hr/>";
$mystring ="Wrap long words hahahhahahahahahhahahahahahahha";
$mystring= wordwrap($mystring,24,"<br/>");
echo $mystring;
?>

<?php
$mystring="only going to the zoo";
$mystring= trim($mystring,"o");
echo $mystring;
echo "<hr/>";
$mystring ="Wrap long words hahahhahahahahahhahahahahahahha";
$mystring= trim($mystring,"a");
echo $mystring;

$string1="in the year";
$string2="the world will end";
$myfile=fopen("myfile.txt","w");
$formatted=fprintf($myfile,"%s %04d %s",$string1,date("Y"),$string2);
echo $formatted;
?>
<?php
echo "<br>";
$mystring="This will\n add break tags where\n new lines chars are.";
$newString=nl2br($mystring);
echo $newString;
echo "<br>";
$mystring="joe's BBQ shack";
$newstring=addslashes($mystring);
echo $newstring;
$mystring=stripcslashes($mystring);
echo $mystring;
echo "<br>";
$mystring="joseph837450";
$hashedString=md5($mystring);
echo "$hashedString";
echo "<br>";
$cart_array=array("Wonder Bread","Pickles","moyannaise","lettuce");
echo $cart_array[0];
echo "<br/>";
echo $cart_array[1];
echo "<br/>";
echo $cart_array[2];
echo "<br/>";
echo $cart_array[3];
echo "<br/></hr>";
echo serialize($cart_array);
echo gettype($cart_array);
//create an associative array that is a cart holding items and prices
 $cart_array=array
("tomato" =>"1.00", "potato" =>"5.00", "sugar"=>"8.00");
//and here is how you can output any key's value you choose
 echo"potato cost $" .$cart_array["potato"]."at this store"; 
 echo "<hr/>";
 foreach ($cart_array as $i => $v) {
 	echo "$i cost $ $v of this store <br>";
 }
 //create a multidimension array that holds member details from our site
 $member=array(
 	"member1" => array (
 		"name" =>"Rukesh",
 		"zodiac" =>"Leo",
 		"country" =>"Nepal"
 	),
 	"member2" => array (
 		"name" =>"Roshani",
 		"zodiac" =>"virgo",
 		"country" =>"Nepal"
 	),
 	"member3" => array (
 		"name" =>"Ram babu",
 		"zodiac" =>"Leo",
 		"country" =>"Nepal"
 	)
 );
 echo "<hr/>";
 foreach ($member as $m => $v) {
 	echo "$m details as follows <br>";
 	foreach ($v as $i => $va) {
 		echo "$i=$va <br>";
 	}
 	echo "<hr/>";
 }

?>



