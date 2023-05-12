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
    <form action="secondPage.php" method="POST">
        <label for="firstName">Imię:</label>
        <input type="text" name="firstName">
        <label for="lastName">Nazwisko</label>
        <input type="text" name="secondName">
        <label for="email">Adres E-mail</label>
        <input type="text" name="email">
        <label for="creditCard">Dane karty kredytowej</label>
        <input type="text" name="creditCard">
        <label for="numberOfPerson">Liczba osób:</label>
        <input type="number" name="numberOfPerson" value="1" min="1" max="5">

        <input type="submit" value="Wyślij" name="submit">
    </form>
</body>
</html>