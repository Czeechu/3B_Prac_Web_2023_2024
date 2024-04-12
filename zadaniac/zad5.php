<?php 
    if(!isset($_COOKIE['hits']))
    {
        $ile = 1;
    }
    else
    {
        $ile = (int)$_COOKIE['hits'];
        if($ile < 1)
            $ile = 1;
        $ile++;
    }
    setcookie("hits", "$ile");
?>
<!DOCTYPE html>
<html lang = "pl">
<head>
    <meta charset="UTF-8">
    <title> Licznik odwiedzin - cookie </title>
</head>
<body>
    <p>
        <?php 
        if($ile >= 10)
            $str = "raz";
        else
            $str = "razy";
        echo "Witam, odwiedziłes nas $ile $str.";
        
        if($ile >=10)
            echo "To twoja 10 wizyta";
        ?>

    </p>
</body>
</html>