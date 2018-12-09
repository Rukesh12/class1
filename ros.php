<?php
if(isset($_POST['submit']))
{
$input1=$_POST['num1'];
$input2=$_POST['num2'];
if(empty($input1)&& empty($input2))
echo "The sum of $input1 and $input2 is ".($input1+$input2);
echo "<br>";
echo "The substraction of $input1 by $input2 is ".($input1-$input2);
echo "<br>";
echo "The multiplication of $input1 and $input2 is".($input1*$input2);
echo "<br>";
echo "The division of $input1 by $input2 is ".($input1/$input2);
echo "<br>";
}

	elseif(empty($input1))
{
	echo "div class ='error'>";
	echo "Error! Please Write First Number <br/>";
	echo "</div";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>arithmetics frms</title>
</head>
<body>
<form method="POST" name="oddEven" action="">
	<fieldset>
		<legend>odd Even check</legend>
		<input type="text" name="num1">
		<?php if (isset($n1)) echo $n1; ?>><br/>
		<input type="text" name="num2">
		<?php if(isset($n2)) echo $n2; ?>>
				<input type="submit" name="submit" value="submit">
	</fieldset>
</form>
</body>
</html>