<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz Rejestracji Ucznia</title>
</head>
<body>
    <h2>Formularz Rejestracji Ucznia</h2>
    <form action="proces.php" method="post">
        <label for="imie_nazwisko">Imię i Nazwisko ucznia:</label>
        <input type="text" name="imie_nazwisko" required><br>

        <label for="data_urodzenia">Data urodzenia:</label>
        <input type="date" name="data_urodzenia" required><br>

        <label for="adres">Adres zamieszkania:</label>
        <input type="text" name="adres" required><br>

        <label for="telefon">Numer telefonu ucznia:</label>
        <input type="tel" name="telefon" pattern="[0-9]{9}" required><br>

        <label for="email">Adres e-mail ucznia:</label>
        <input type="email" name="email" required><br>

        <label for="rodzic_nazwisko">Imię i Nazwisko rodzica/opiekuna:</label>
        <input type="text" name="rodzic_nazwisko" required><br>

        <label for="rodzic_telefon">Numer telefonu rodzica/opiekuna:</label>
        <input type="tel" name="rodzic_telefon" pattern="[0-9]{9}" required><br>

        <label for="rodzic_email">Adres e-mail rodzica/opiekuna:</label>
        <input type="email" name="rodzic_email" required><br>

        <label for="kierunek">Wybór kierunku/klasy:</label>
        <select name="kierunek" required>
            <option value="matematyka">Matematyka</option>
            <option value="języki_obce">Języki obce</option>
        </select><br>

        <input type="submit" value="Zarejestruj">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['imie_nazwisko']) || empty($_POST['data_urodzenia']) || empty($_POST['adres']) || empty($_POST['telefon']) || empty($_POST['email']) || empty($_POST['rodzic_nazwisko']) || empty($_POST['rodzic_telefon']) || empty($_POST['rodzic_email']) || empty($_POST['kierunek'])) {
        echo "Proszę wypełnić wszystkie pola.";
    } else {
        $imieNazwisko = $_POST['imie_nazwisko'];
        $dataUrodzenia = $_POST['data_urodzenia'];
        $adres = $_POST['adres'];
        $telefon = $_POST['telefon'];
        $email = $_POST['email'];
        $rodzicNazwisko = $_POST['rodzic_nazwisko'];
        $rodzicTelefon = $_POST['rodzic_telefon'];
        $rodzicEmail = $_POST['rodzic_email'];
        $kierunek = $_POST['kierunek'];

        echo "Dane zostały pomyślnie zarejestrowane!";
    }
}
?>
</body>
</html>
