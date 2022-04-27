<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1591</title>
</head>
<body>
<?php
    $n = rand(1,100);
    function Calculator($n)
    {
        $sum = 0;
        for($i=1;$i<=$n;$i++)
        {
            $sum+=$i;
        }
        return $sum;
    }
    $result = Calculator($n);
    echo "$n<br>";
    echo "$result";
?>
</body>
</html>