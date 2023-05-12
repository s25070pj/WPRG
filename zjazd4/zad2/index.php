<?php
    $numberOfVisits = isset($_COOKIE['numberOfVisits']) ? $_COOKIE['numberOfVisits'] : 0;
    $numberOfVisits++;

    setcookie("numberOfVisits", $numberOfVisits);

    if ($numberOfVisits > 10){
        echo "Liczba twoich odwiedzin: " .$numberOfVisits;
    }

?>