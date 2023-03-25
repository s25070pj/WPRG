<?php
function whichNationality($country) {
    $nationality = array(
        'Polska' => 'Polak',
        'Niemcy' => 'Niemiec',
        'Francja' => 'Francuz',
        'Włochy' => 'Włoch',
        'Anglia' => 'Anglik',
        'Ukraina' => 'Ukrainiec',
        'Brazylia' => 'Brazylijczyk'
    );

    if (array_key_exists($country, $nationality)) {
        return $nationality[$country];
    } else {
        return 'Nie mamy takiego kraju w bazie!';
    }
}

echo whichNationality('Polska')
?>