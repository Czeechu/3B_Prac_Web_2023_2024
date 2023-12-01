<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>duplication method</title>
</head>
<body>
    <?php 
    function Method($function, $a, $b, $tolerance)
    {
        $fa = eval("return $function;");

        if($fa * eval("return $function;") > 0)
        {
            echo "Wybrany przedział nie obejmuje pierwiastka.";
            return;
        } 

        $iteration = 1;

        do{
            $c = ($a + $b) /2
            $fc = eval("return $function;");

            Echo "Iteracja $iteration: Pierwiastek = $c, f(c) = $fc <br>";

            if ($fc == 0 || abs($b - $a) /2 < $tolerance)
            {
                break;
            }

            $iteration++;

            if($fc * $fa < 0)
            {
                $b = $c;
            }
            else
            {
                $a = $c;
                $fa = $fc;
            }
        }while(true);
    }echo "Znaleziony punkt: $c";
    
    $fucntion = "pow(\$c, 3) - 5";
    $a = 1;
    $b = 2;
    $tolerance = 0.0001;

    method($function, $a, $b, $tolerance)
    ?>
</body>
</html>