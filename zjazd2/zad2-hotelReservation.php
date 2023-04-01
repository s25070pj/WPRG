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

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"></form>
<label for="numberOfPeople">Ilość osób: </label>
<select name="numberOfPeople" id="numberOfPeople">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select>
<h1>Dane rezerwującego</h1>
<label for="name">Imię:</label>
<input type="text" name="name" id="name" required>

<label for="SecondName">Nazwisko</label>
<input type="text" name="SecondName" id="SecondName" required>

<label for="adress">Adres zamieszkania</label>
<input type="text" name="adress" id="adress" required>

<?php
$name = $_POST['name'];

?>
</body>
</html>



