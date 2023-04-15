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
    <label for="number">Podaj liczbę:</label>
    <input type="number" id="number" name="number">
    <input type="submit" value="zatwierdź">
</form>


<?php

$number = $_POST['number'];
function isNumberPrime($number) {
    $iterations = 0;

    if($number < 1 || is_int($number)) {
        echo 'liczba jest ujemna bądź nie jest całkowita';
        return false;
    }
    elseif ($number < 2) {
        echo 'liczba nie jest liczba pierwsza';
        return false;
    }
    for($i = 2; $i <= sqrt($number); $i++) {
        $iterations++;
        if ($number % $i == 0){
            echo 'liczba nie jest liczba pierwsza';
            return false;
        }
    }
    echo 'liczba jest liczba pierwsza' . "\n";
    echo ',  liczba iteracji petli do sprawdzenia czy liczba ' . $number . ' jest liczba pierwsza to ' . $iterations;
    return true;
}

isNumberPrime($number);


?>

</body>
</html>