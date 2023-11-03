<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przystość</title>
</head>
<body>
    <?php 
    $a = 3;
    $b = 4;
    $c = 5;

    if($a == $b && $b == $c)
    {
        echo "Trójkąt jest równoboczny";
    }
    else if($a == $b || $a == $c || $b == $c)
    {
        echo "Trójkąt jest równoramienny";
    }
    else if($a * $a + $b * $b == $c * $c) || ($a * $a + $c * $c == $b * $b) || ($b * $b + $c * $c == $a * $a)
    {
        echo "Trójkąt jest prostokątny";
    }
    ?>
</body>
</html>