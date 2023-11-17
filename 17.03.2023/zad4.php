<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
    $a = 4;
    $b = 2;
    if($a > $b)
    {
        echo($a. "Jest wieksza od liczby " $b.);
    }
    else if($a < $b)
    {
        echo($b. "Jest wieksza od liczby " $a.);
    }
    else if($a == $b)
    {
        echo($a. "i" $b. "sa równe");
    }

    ?>

</body>
</html>