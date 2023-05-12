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
    if (isset($_POST['submit'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $creditCard = $_POST['creditCard'];
        $numberOfPerson = $_POST['numberOfPerson'];

        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['creditCard'] = $creditCard;
        $_SESSION['numberOfPerson'] = $numberOfPerson;


        echo "<h2>Dane osób</h2>";
        echo "<form action ='thirdPage.php' method='post' >";
        for ($i = 1; $i <= $numberOfPerson; $i++) {
            echo "<h3>Osoba $i</h3>";
            echo "<label for='person[$i][$firstName]'>Imię</label>";
            echo "<input type='text' name='person[$i][$firstName]'>";
            echo "<label for='person[$i][$lastName]'>Nazwisko</label>";
            echo "<input type='text' name='person[$i][$lastName]'>";
            echo "<label for='person[$i][$email'>E-mail</label>";
            echo "<input type='text' name='person[$i][$email]'>";

            echo "<input type='submit' name='save' value='Zapisz'>";
            echo "<input type='submit' name='submit' value='Dalej'>";
            echo "</form>";
        }
    }

?>




</body>
</html>