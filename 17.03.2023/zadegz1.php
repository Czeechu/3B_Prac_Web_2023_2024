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
        $kwotaPLN = $_POST["kwotaPLN"];
        $wybranaWaluta = $_POST{"waluta"};

        switch($wybranaWaluta)
        {
            case "euro":
                $wynik = $kwotaPLN / $kursEuro;
                break;
            case "dolar":
                $wynik = $kwotaPLN / $kursDolar;
                break;
            case "frank":
                $wynik = $kwotaPLN / $kursFrank;
                break;
            default:
            $wynik = "Niepoprawny wybór waluty";
        }

        echo "Wynik przeliczenia: $wynik $wybranaWaluta";
    }
    ?>

    <from method="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">

    <label for="kwotaPLN">
        Kwota w zł 
    </label>
    <input type = "number" name ="kwotaPLN" required>
    <br>
    <label for="waluta">
        Wybierz walutę: 
</label>
<select name ="waluta">
    <option value="euro">
        Euro
</option>
<option value="dolar">
    Dolar 
</option>
<option value="frank">
    Frank
</option>
</select>
<br>
<button type="submit"> 
    Przelicz
</button>
</form>

</body>
</html>