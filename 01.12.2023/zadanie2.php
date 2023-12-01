<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <?php
    echo "Pętla for: <br>";
    for($f = 100; $f > 0; $f--)
    {
        echo $f . '<br>';
    }

    echo "Pętla while: <br>";
    $w = 100;
    while ($w > 0)
    {
        echo $w . '<br>';
        $w--;
    }

    echo "Pętla do-while: <br>";
    $d = 100;
    do{
        echo $d . '<br>';
        $d--;
    }while ($d > 0);

    ?>
</body>
</html>