<!DOCTYPE html>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Température</h1>
<?php
$homepage = file_get_contents('data.txt');
echo $homepage;

$data = json_decode($homepage);


?>
<p> il fait <?php echo $data->temperature;?> avec 46% d'humidité</p>
<div id="thermometer">
  <div id="bargraph"></div>
</div>
</body>
</html>