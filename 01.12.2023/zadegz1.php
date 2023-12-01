<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 1 egz</title>
</head>
<body>
    <?php 
    $snumber = 100;
    $calculate = 100;
    $sum = 0;

    for($i = 0; $i < $calculate; i++)
    {
        $evenNumber = $snumber + (2 * $i);
        $sum += $evenNumber;
    }

    echo "Suma 100 pierwszych kolejnych liczb zaczynających się od 100: $sum";

    ?>
</body>
</html>