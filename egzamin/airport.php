<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>

    <div id="banerL">
        <h2> Odloty z lotniska</h2>
    </div>

    <div id="banerP">
        <img src="zad6.png" alt="logotyp"/>

    </div>
    
    <div id="glowny">
        <h4>TABELA ODLOTOW</h4>
        <table>
            <tr> 
                <th> LP.</th>
                <th> NUMER REJSU</th>
                <th> CZAS</th>
                <th> KIERUNEK</th>
                <th> STATUS</th>
            </tr>
            <?php 
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database  =  "egzamin";

                $conn = new mysqli($servername, $username, $password, $database);

                if($conn->connect_error)
                {
                    die("Połączenie przerwane: " .$conn->connet_error);
                }

                $sql = "SELECT id, nr_rejsu, kierunek, czas, status_lotu FROM odloty ORDER BY odloty.czas desc";

                $result = mysqli_query($conn, $sql);

                if($result->num_rows > 0)
                {
                
                    while($row = mysqli_fetch_row($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $row[0] . "</td>";
                        echo "<td>" . $row[1] . "</td>";
                        echo "<td>" . $row[2] . "</td>";
                        echo "<td>" . $row[3] . "</td>";
                        echo "<td>" . $row[4] . "</td>";
                        echo "</tr>";
                    }
                    
                }
                else
                {
                    echo "0 resluts";
                }
                $conn->close();
            ?>
        </table>
    </div>
    
    <div id="stopkaL">
        <a href="kw1.jpg" target="_blank" >Pobierz obraz </a>
    </div>

    <div id="stopka">
    <?php 
        if(isset($_COOKIE['wejscie'])) {
            echo '<p><strong> Miło nam, że nas znowu odwiedziłeś! </strong></p>';
        }
        else {
            setcookie('wejscie', 'wejscie', time() + 3600, "", "", false, false);
            echo '<p><i> Dzień dobry! Sprawdź regulamin naszej strony</i></p>';
        }
    ?>
    </div>

    <div id="stopkaP">
        Autor: Filip Gos Czech
    </div>
</body>
</html>