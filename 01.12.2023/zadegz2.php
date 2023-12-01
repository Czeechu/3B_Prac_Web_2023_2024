<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 2 egz</title>
</head>
<body>
    <?php 
    $sum = 0;
    $number = 0;
    $currentNumber = 10;

    while($sum < 1001)
    {
        $sum += $currentNumber;
        $currentNumber++;
        $number++;
    }

    echo "Uzyskana suma: " . $sum . "<br>";
    echo "Liczba zsumowanych liczb: " . $currentNumber . "<br>";

    ?>
</body>
</html>