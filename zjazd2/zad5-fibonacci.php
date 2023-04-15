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
    <label for="number"></label>
    <input type="number" name="number" id="number">
    <input type="submit" value="wyslij">
</form>



<?php

$n = $_POST['number'];

// Funkcja rekurencyjna obliczająca silnię
function silnia_rec($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * silnia_rec($n-1);
    }
}

// Funkcja nierekurencyjna obliczająca silnię
function silnia($n) {
    $wynik = 1;
    for ($i = 1; $i <= $n; $i++) {
        $wynik *= $i;
    }
    return $wynik;
}

// Funkcja rekurencyjna obliczająca n-ty wyraz ciągu Fibonacciego
function fib_rec($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fib_rec($n-1) + fib_rec($n-2);
    }
}

// Funkcja nierekurencyjna obliczająca n-ty wyraz ciągu Fibonacciego
function fib($n) {
    if ($n <= 1) {
        return $n;
    }
    $a = 0;
    $b = 1;
    for ($i = 2; $i <= $n; $i++) {
        $temp = $b;
        $b = $a + $b;
        $a = $temp;
    }
    return $b;
}


$start_time = microtime(true);
$wynik1 = silnia_rec($n);
$end_time = microtime(true);
echo "Silnia rekurencyjna: $wynik1, czas wykonania: " . ($end_time - $start_time) . " sekund<br>";

$start_time = microtime(true);
$wynik2 = silnia($n);
$end_time = microtime(true);
echo "Silnia nierekurencyjna: $wynik2, czas wykonania: " . ($end_time - $start_time) . " sekund<br>";

$start_time = microtime(true);
$wynik3 = fib_rec($n);
$end_time = microtime(true);
echo "n-ty wyraz ciągu Fibonacciego rekurencyjnie: $wynik3, czas wykonania: " . ($end_time - $start_time) . " sekund<br>";

$start_time = microtime(true);
$wynik4 = fib($n);
$end_time = microtime(true);
echo "n-ty wyraz ciągu Fibonacciego nierekurencyjnie: $wynik4, czas wykonania: " . ($end_time - $start_time) . " sekund<br>";


?>
</body>
</html>