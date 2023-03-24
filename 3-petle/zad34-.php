<?php

function isNumberPrime($number) {
    $iterations = 0;
    if ($number < 2) {
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
    echo 'liczba iteracji petli do sprawdzenia czy liczba ' . $number . ' jest liczba pierwsza to ' . $iterations;
    return true;
}

// przykładowe użycie funkcji
isNumberPrime(907);


?>