<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przystość</title>
</head>
<body>
    <?php 
    $kat = "elektronika";

    $cena = 100;
    $cenaO = 50;
    $cenaP = 5;

    $stawkaPo = 0;

    switch($kat)
    {
        case "elektronika":
            $stawPo = 0.5;
            $cena = $cenaE;
            break;
        case "odzież":
            $stawkaPo = 0.2;
            $cena = $cenaO;
            break;
        case "pieczywo":
            $stawkaPo = 0;
            $cena = $cenaP;
            break;
        default:
            echo "Nie ma takiej kategorii";
    }

    if($stawkaPo > 0)
    {
        $cenaPoP = $cena + ($cena + $stawkaPo);
        echo "Cena produktu w \"$kat\" po podatku wynosi: ". $cenaPoP;
    }
    else{
        echo "Nie mozna obliczyć podatku";
    }
    ?>
</body>
</html>