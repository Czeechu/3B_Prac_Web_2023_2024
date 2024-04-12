<?php 
    $cookie_name = "username";
    $cookie_value = "Filip Gos Czech";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>
<html>
<body>

<?php 
    if(isset($_COOKIE[$cookie_name]))
    {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }
    else
    {
        echo "Cookie '" . $cookie_value . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    setcookie("user", "", time() - 3600);
    setcookie("user","");
    setcookie("user", "false");
?>

</body>
</html>
