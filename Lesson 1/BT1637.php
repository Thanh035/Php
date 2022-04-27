<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1637</title>
</head>
<body>
    <?php
        function Fibonacci($n)
        {
            if($n == 0 or $n == 1)
                return 1;
            return Fibonacci($n-1) + Fibonacci($n-2);
        }
        $f0 = Fibonacci(0);
        $f1 = Fibonacci(1);
        $f5 = Fibonacci(5);
        echo "f(0) = $f0<br>";
        echo "f(1) = $f1<br>";
        echo "f(5) = $f5<br>";

        $count=0;
        echo "Fibonaci List:";
        while($count <10)
        {
                $count++;
                $fibo = Fibonacci($count);
                echo "$fibo ";
        }
        
    ?>
</body>
</html>