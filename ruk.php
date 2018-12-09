<?php
	
	// $qty = 5;
	// $price = 10000;
	// $atm = $qty*$price;

	// echo "Rs.".number_format($atm,2);
	// $num =5;

	// if ($num%2==0) 
	// 	echo "Even<br>";
	// else
	// 	echo "Odd<br>";

	// for($i=1;$i<=10;$i++){
	// 	echo $num."*".$i."=".$num*$i."<br>";
	// }


?>


<?php

//printing table
// echo "<div align='center'>";
// echo "<table border=1 cellspacing=1 cellpadding=1 width=1000px>";
// $i=1;
// $n=1;

// for($i=1;$i<=10;$i++){
// echo "<tr>";
// for($j=1;$j<=10;$j++){

// 	echo "<td align='center'>$n</td>";
// $n++;
// }
// echo "</tr>";

// }

// echo "</table></div>"



?>


<?php
	//using date function
	//setting timezone
	// date_default_timezone_set('Australia/Sydney');
	// $today = date('Y/M/d, h:i:s a');
	// echo $today;

	// echo "<br>";
	// date_default_timezone_set('Asia/Kathmandu');

	// $today = date('Y/M/d, h:i:s a');
	// echo $today;

?>


<?php 
	// date_default_timezone_set("Asia/Kathmandu");
	// echo date('l, jS F Y'); 
	// echo "<br>";
	// echo date(' h:i:s a');
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Even || Odd</title>
</head>
<body>

<form method="POST" action="user_input.php" name="userInput">
	<fieldset>
	<legend>Form</legend>
		<input type="text" name="num1">
		<input type="submit" name="Submit" value="result">
	</fieldset>
</form>


<?php 
	 
if(isset($_POST['Submit'])){
		 
			if($_POST['num1']%2 == 0)
				echo "Even";
			else
				echo "Odd";
	}
	
?>


</body>
</html>

