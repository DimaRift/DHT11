<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="main.css"></link>
	<title></title>
</head>
<body>


<h1 >Température</h1>

<?php

$file = "data.txt";
$texte = file_get_contents($file);
$data = json_decode($texte);
$bargraph_height = 160+ $data->temperature * 4;
$bargraph_top = 315+$data->temperature * 4*-1;

?>
<p>il fait <?php echo $data->temperature; ?>° avec <?php echo $data->humidite ?>% d'humidité</p>

<div id="thermometer">

  <div id="bargraph" style=<?php echo "\"height:".$bargraph_height."px; top:".$bargraph_top."px;\""?>

	>
  </div>
</div>

</body>
</html>
