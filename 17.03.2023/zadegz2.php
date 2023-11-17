<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie egz1</title>
</head>
<body>
    <?php 
    $kursEuro = 4.32;
    $kursDolar = 3.21;
    $kursFrank = 3.98;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $wybranyJezyk = $_POST{"jezyk"};

        if($wybranyJezyk == "p"){
            $jezykStrony = "polski";
        }
        else if($wybranyJEzyk = "a"){
            $jezykStrony = "angielski";
        }
        else if($wybranyJEzyk = "n"){
            $jezykStrony = "niemiecki";
        }
        else if($wybranyJEzyk = "h"){
            $jezykStrony = "hiszpanski";
        }


        echo "Wybrany jezyk: $jezykStrony";
    }
    ?>

    <from method="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">

    <label> Wybierz język: </label>
    <select name="jezyk">
        <option value="p"> Polski </option>
        <option value="a"> Angielski </option>
        <option value="n"> Niemiecki </option>
        <option value="h"> Hiszpański </option>
</select>
<button type="submit"> Potwierdz </button>
</form>

</body>
</html>