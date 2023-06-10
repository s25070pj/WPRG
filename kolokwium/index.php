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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p> Podaj imie</p>
    <input type="text" name="firstName">

    <p> Podaj nazwisko</p>
    <input type="text" name="lastName">

    <p>Podaj adres email</p>
    <input type="text" name="mail">
    <p>opis wystepujacego bledu:</p>
    <textarea  maxlength="255" name="description"></textarea>

    <input type="submit">
    </form>

    <?php
    session_start();

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'defekty';

    $conn = mysqli_connect($host,$username,$password,$database);

    if ($conn -> connect_error){
        die('Błąd połączenia' . $conn -> connect_error);
    }

    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $email = $_GET["email"];
    $description = $_GET['description'];

    echo("Cześć ". $firstName . $lastName . " czy treść się zgadza?" );
    echo ($description);

    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['email'] = $email;
    $_SESSION['description'] = $description;

    if (isset($_COOKIE['s2s5070'])) {
        echo 'Twój formularz został już wysłany.';
        exit();
    }else{
        setcookie("s2s5070", "10/06/2023", time()+3600);
        mysqli_select_db($conn, "defekty");

        mysqli_query($conn,"INSERT INTO zgloszenia VALUES ($firstName,$lastName,$email,$description)");
        mysqli_close($conn);
    }


    session_destroy();
    ?>

</body>
</html>