<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    Wzorst: 
    <input type = "number" name="wzrost" />  
    Waga: 
    <input type = "number" name ="waga" />
    Wiek
    <input type = "number" />
    
    <input type="submit"/>
    </form>    
<?php 
    $waga = $_POST['waga'];
    $wzrost = $_POST['wzrost']/100;
    $bmi = $waga/($wzrost * $wzrost);

    echo "Wyswietlenie twojego bmi: " . $bmi;

    if($bmi < 18.5)   
    {
        echo "niedowaga";
    }
    elseif ($bmi <24.99)
    {
        echo "waga prawidlowa";
    }
    elseif ($bmi > 25.0)
    {
        echo "nadwaga";
    }
?>
</body>
</html>