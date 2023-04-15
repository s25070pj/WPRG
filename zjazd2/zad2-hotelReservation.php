<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="numberOfPeople">Ilość osób: </label>
<select name="numberOfPeople" id="numberOfPeople">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select>
    <input type="submit" value="Zatwierdź">
</form>
    <?php
    $numberOfPeople = $_POST['numberOfPeople'];
    if(isset($_POST['numberOfPeople'])):
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <h1>Dane rezerwującego</h1>
            <label for="name">Imię:</label>
            <input type="text" name="name" id="name" required>

            <label for="surName">Nazwisko</label>
            <input type="text" name="surName" id="surName" required>

            <label for="adress">Adres zamieszkania</label>
            <input type="text" name="adress" id="adress" required>

            <label for="creditCard">Dane karty kredytowej:</label>
            <input type="text" id="creditCard" name="creditCard" pattern="[0-9]{16}" title="Wpisz 16 cyfr" required><br><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="checkInDate">Data pobytu:</label>
            <input type="date" id="checkInDate" name="checkInDate" required><br><br>

            <label for="checkInTime">Godzina przyjazdu:</label>
            <input type="time" id="checkInTime" name="checkInTime" required><br><br>

            <label for="childBed">Dostawka dla dziecka:</label>
            <input type="checkbox" id="childBed" name="childBed"><br><br>

            <label for="amenities">Udogodnienia:</label>
            <input type="checkbox" id="amenities" name="amenities" value="klimatyzacja"> Klimatyzacja
            <input type="checkbox" id="amenities" name="amenities" value="popielniczka"> Popielniczka
            <br><br>


        <?php for($i = 1; $i <= $_POST['numberOfPeople']; $i++): ?>




                <h2>Dane osoby <?php echo $i; ?>:</h2>
                <label for="name<?php echo $i; ?>">Imię:</label>
                <input type="text" name="name<?php echo $i; ?>" id="name<?php echo $i; ?>" required>

                <label for="surName<?php echo $i; ?>">Nazwisko:</label>
                <input type="text" name="surName<?php echo $i; ?>" id="surName<?php echo $i; ?>" required>

                <label for="age<?php echo $i; ?>">Wiek:</label>
                <input type="number" name="age<?php echo $i; ?>" id="age<?php echo $i; ?>" required>

                <br><br>
            <?php endfor; ?>
            <input type="submit" value="Zatwierdź">
        </form>
    <?php endif; ?>


<?php
$name = $_POST['name'];
$surName = $_POST['surName'];
$adress = $_POST['adress'];
$creditCard = $_POST['creditCard'];
$email = $_POST['email'];
$checkInDate = $_POST['checkInDate'];
$checkInTime = $_POST['checkInTime'];
$childBed = $_POST['childBed'] ? "Tak" : "Nie";
$amenities = isset($_POST["amenities"]) ? (is_array($_POST["amenities"]) ? implode(", ", $_POST["amenities"]) : $_POST["amenities"]) : "Brak";


echo <<<HTML
  <h2>Podsumowanie rezerwacji</h2>
  <p><strong>Ilość osób:</strong> $numberOfPeople</p>
  <p><strong>Imię:</strong> $name</p>
  <p><strong>Nazwisko:</strong> $surName</p>
  <p><strong>Adres:</strong> $adress</p>
  <p><strong>Dane karty kredytowej:</strong> $creditCard</p>
  <p><strong>E-mail:</strong> $email</p>
  <p><strong>Data przyjazdu:</strong> $checkInDate</p>
  <p><strong>Godzina przyjazdu:</strong> $checkInTime</p>
  <p><strong>Łóżko dla dziecka:</strong> $childBed</p>
  <p><strong>Udogodnienia:</strong> </p>
HTML;
print_r($amenities);

for($i = 1; $i <= $numberOfPeople; $i++) {
    $personName = $_POST['name' . $i];
    $personSurName = $_POST['surName' . $i];
}
?>
</body>
</html>

