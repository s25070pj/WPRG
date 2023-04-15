<?php
    $birthdate = $_GET['birthdate'];

    $dayOfWeek = date('1', strtotime($birthdate));

    $age = date_diff(date_create($birthdate), date_create('today')) ->y;

    $nextBirthday = date('Y-m-d', strtotime($birthdate . ' + ' . (date('Y') - date('Y', strtotime($birthdate))) . 'years'));

    $daysToNextBirthday = floor((strtotime($nextBirthday) - strtotime('today')) / (60*60*24));

    echo 'urodziles sie w: ' . $dayOfWeek . ' dniu tygodnia, ';
    echo 'masz: ' . $age . ' lat, ';
    echo 'do najblizszych urodzin zostało ci ' . $daysToNextBirthday . ' dni ';

?>