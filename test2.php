<!DOCTYPE html>
<html>
<head>
	<title>starting php by different way</title>
</head>
<body>
<h1>the date and time is:
</h1>
<?php 
date_default_timezone_set('Asia/Kathmandu');
echo date('Y/m/d h:i:s');
?>
</body>
</html>