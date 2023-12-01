<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 4</title>
</head>
<body>
    <?php 
    echo "Wyswietlenie liczb naturalnych i ich pierwiastkow kwadratowych: ";

    echo "Pętla for: <br>";
    for($f = 1; $f <=10; $f++)
    {
        $sqrt = sqrt($f);
        echo "Liczba: $f, Pierwiastek kwadratowy: $sqrt <br>";
    }
    
    echo "Pętla while: <br>";
    $w =1;
    while ($w <=10)
    {
        $sqrt = sqrt($w);
        echo "Liczba: $w, Pierwiastek kwadratowy: $sqrt <br>";
        $w++;
    }

    echo "Pętla do-while: <br>";
    $d = 1;
    do
    {
        $sqrt = sqrt($d);
        echo "Liczba: $d, Pierwiastek kwadratowy: $sqrt <br>";
    }while($d <= 10);

    ?>
</body>
</html>