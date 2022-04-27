<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width ,initial-scale=1.0">
	<title>BT1592</title>
</head>
<body>
<?php 
	$n = rand(1,100);
	echo "$n<br>";
	$count = 1;
	for($i=0;$i<$n;$i++)
	{
		for($j=0;$j<$count;$j++)
		{
			echo "*";	
		}
		$count++;
		echo "<br>";
	}
 ?>
</body>
</html>