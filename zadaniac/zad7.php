<?php 
    if(isset($_COOKIE['ile']))
    {
        $ile = $_COOKIE['ile'];
    }
    else
    {
        $ile = 0;
    }

    setcookie('ile', $ile, strtotime('+1 year'));

    echo "Liczba odwiedzin: $ile";
?>
