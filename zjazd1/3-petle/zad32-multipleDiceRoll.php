<?php

$numberOfRolls = 5;

function roll($rolls) {
    $rollsStorage = array();
    for ($i = 0; $i < $rolls; $i++){
        $rollsStorage[$i] = rand(1, 6);
    }

    return $rollsStorage;
}

echo "Oto wyniki rzutow: "; print_r(roll($numberOfRolls));
?>
