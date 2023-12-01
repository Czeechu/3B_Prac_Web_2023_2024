<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <?php
	$number_f = "";
    echo "Pętla for: <br>";
    for($f = 100; $f > 0; $f--)
    {
        if($f % 5 == 0)
        {
            $number_f .= $f . ", ";
        }
    }
    
    $num_w = "";
    echo "Pętla while: <br>";
    $w = 100;
    while ($w > 0)
    {
        if($w % 5 == 0)
        {
            $num_w .= $w .", ";
        }
        $w--;
    }
    $num_d_w = "";
    echo "Pętla do-while: <br>";
    $d = 100;
    do{
        if($d % 5 == 0)
        {
            $num_d_w .= $d . ", ";
        }
        $d++;
    }while ($d > 0);

    ?>
</body>
</html>