<?php
$numberOfVisits = isset($_COOKIE['numberOfVisits']) ? $_COOKIE['numberOfVisits'] : 0;
$session = isset($_SESSION['numberOfVisits']) ? $_SESSION['numberOfVisits'] : 0;

if($numberOfVisits == 0 || $numberOfVisits != $session){
    $numberOfVisits ++;
    setcookie("numberOfVisits", $numberOfVisits);
    $_SESSION['numberOfVisits'] = $numberOfVisits;
}



if ($numberOfVisits > 10) {
    echo "Liczba twoich odwiedzin: " . $numberOfVisits;
}

echo "Liczba odwiedzin: " .$numberOfVisits;
?>
