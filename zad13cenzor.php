<?php

function ocenzuruj($zdanie) {
    $niepozadane_slowa = array('brudas', 'czarnuch', 'ćpun');
    foreach ($niepozadane_slowa as $slowo) {
        $ilosc_znakow = mb_strlen($slowo, 'UTF-8');
        $gwiazdki = str_repeat('*', $ilosc_znakow);
        $zdanie = str_ireplace($slowo, $gwiazdki, $zdanie);
    }
    return $zdanie;
}

$tekst = "ale ćpun z tego czarnucha";

echo ocenzuruj($tekst);
?>