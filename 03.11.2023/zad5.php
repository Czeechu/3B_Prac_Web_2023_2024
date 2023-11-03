<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przystość</title>
</head>
<body>
    <?php 
    $procent = 50;

    if($procent >= 90)
    {
        $ocena = "6";
    }
    else if($procent >= 50)
    {
        $ocena = "3";
    }
    else if($procent >= 80)
    {
        $ocena = "4";
    }
    else if($procent >= 20)
    {
        $ocena = "1";
    }

    echo "Wynik procentowy: $procent jest równy ocenie: $ocena";
    ?>
</body>
</html>