<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="main.css">
<html>
<head>
	<title></title>
</head>
<body>
<h1>Température</h1>
<?php
$homepage = file_get_contents('data.txt');
echo $homepage;
?>
<img src="img/thermometer.jpg">
</body>
</html>