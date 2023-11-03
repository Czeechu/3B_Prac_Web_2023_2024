<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przystość</title>
</head>
<body>
    <?php 
    $rok = 2023;

    if($rok % 4 == 0)
    {
        if($rok % 100 != 0)
        echo "Rok $rok jest przystępny";
    }
    else {
        echo " Rok $rok nie jest pprzystępny";
    }

    $stulecie = round($rok / 100);
    echo "Podany rok nalezy do stulecia " . $stulecie;
    ?>
</body>
</html>