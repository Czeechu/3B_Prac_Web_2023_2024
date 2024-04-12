<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $brithday = $_POST['brithday'];

        setcookie('brithday_cookie', $brithday, strtotime('tommorow'));

        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    }

    if(isset($_COOKIE['brithday_cookie']) && $_COOKIE['brithday_cookie'] == date("Y-m-d"))
    {
        echo "Wszystkiego najlepszego";
    }
    else
    {
        echo '
            <form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]). '">
            Podaj datę urodzin: <input type="date" name="brithday" required>
            <input type="submit" value="Prześlij">
            </form>
        ';
    }
?>