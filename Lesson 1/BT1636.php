<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1636</title>
</head>
<body>
    <?php
    $n = rand(1,100);
    echo "N = $n";
    $index = 0;
    for($i=0;$i<$n;$i++)
    {
        $arr[$i] = rand(1,100);
    }
    echo "<br>Before Sorting : ";
    for($i=0;$i<$n;$i++)
    {
        echo "$arr[$i] ";
    }
    function Swap(&$a,&$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    for($i=0;$i<$n-1;$i++)
    {
        for($j=$i+1;$j<$n;$j++)
        {
            if($arr[$i] > $arr[$j])
            {
                Swap($arr[$i],$arr[$j]);
            }
        }
    }
    echo "<br>After Sorting : ";
    for($i=0;$i<$n;$i++)
    {
        echo "$arr[$i] ";
    }
    ?>
</body>
</html>