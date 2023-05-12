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

<?php
session_start();
    if (isset($_POST['save'])) {
        $_SESSION['people'] = $_POST['person'];
    }

    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $email = $_SESSION['email'];
    $creditCard = $_SESSION['creditCard'];
    $numberOfPerson = $_SESSION['numberOfPerson'];
    $people = $_SESSION['people'];

    echo "<h2>Podsumowanie</h2>";
    echo "<p>Numer karty: $creditCard</p>";
    echo "<p>Imię i nazwisko zamawiającego: $firstName $lastName</p>";
    echo "<p>Email zamawiającego: $email</p>";
    echo "<p>Liczba osób: $numberOfPerson</p>";
    echo "<h3>Lista osób:</h3>";
    foreach ($people as $person) {
    echo "<p>Imię: " . $person['firstName'] . "</p>";
    echo "<p>Nazwisko: " . $person['lastName'] . "</p>";
    echo "<p>Email: " . $person['email'] . "</p>";
    echo "<hr>";
}


?>

</body>
</html>