<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <header class="baner">
        <h1>BIURO PODRÓŻY</h1>
    </header>

    <main>
        <section class="lewy">
            <h2>Promocje</h2>
            <table>
                <tr>
                    <td>Warszawa</td>
                    <td>od 600 zł</td>
                </tr>
                <tr>
                    <td>Wenecja</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Paryż</td>
                    <td>od 1200 zł</td>
                </tr>
            </table>
        </section>

        <section class="srodkowy">
            <h2>W tym roku jedziemy do...</h2>
            <?php 
            $polaczenie = mysqli_connect("localhost", "root", "", "podroze");

            $zapytanie = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;";

            $wynik = mysqli_query($polaczenie, $zapytanie);

            while ($wiersz = mysqli_fetch_array($wynik))
            {   

                echo  "<img src='$wiersz[0]' alt='$wiersz[1]'>";
                
            }

            
            ?>
        </section>

        <section class="prawy">
                <h2>Kontakt</h2>
                <a href="biuro@wycieczki.pl">napisz do nas</a>
                <p>telefon: 444555666</p>
        </section>
        
        <section class="blokDane">
            <h3>W poprzednich latach byliśmy...</h3>
            <ol>
                <?php 
                    $polaczenie2 = mysqli_connect("localhost", "root", "", "podroze");

                    $zapytanie2 = "SELECT cel, dataWyjazdu FROM wycieczki WHERE dostepna = 0;";

                    $wynik = mysqli_query($polaczenie2, $zapytanie2);

                    if(mysqli_num_rows($wynik) > 0)
                    {
                    
                        while($wiersz2 = mysqli_fetch_array($wynik))
                        {
                            echo "<li>" ."Dnia ". $wiersz2[1] ." pojechaliśmy do ". $wiersz2[0] ."</li>";
                        }
                    }
                    
                    mysqli_close($polaczenie2);
            ?>
        
            </ol>
        </section>
    </main>

    <footer class="stopka">
        <p>Stronę wykonał: Filip</p>
    </footer>

</body>
</html>