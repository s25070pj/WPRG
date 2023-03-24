<?php

$randomNumbers = array();

function maxElement()
{

    for ($i = 0; $i < 50; $i++) {
        $randomNumbers[] = mt_rand(0, 300);
    }
    print_r($randomNumbers);

    $temp = $randomNumbers[0];

    // petla for
    // for ($i = 1; $i < count($randomNumbers); $i++) {
    //    if ($randomNumbers[$i] > $randomNumbers[$i - 1] && $randomNumbers[$i] > $temp) {
    //        $temp = $randomNumbers[$i];
    //    }
    //}

    //petla while
    /* $i = 1;
    while($i < count($randomNumbers)) {
        if ($randomNumbers[$i] > $randomNumbers[$i - 1] && $randomNumbers[$i] > $temp) {
            $temp = $randomNumbers[$i];
        }
        $i++;
    }
    */


    //petla do...while
    /*$i = 1;
    do {
        if ($randomNumbers[$i] > $randomNumbers[$i - 1] && $randomNumbers[$i] > $temp) {
            $temp = $randomNumbers[$i];
        }
        $i++;
    }while($i < count($randomNumbers));

    */
    // petla foreach

    foreach ($randomNumbers as $index => $value) {
        if ($index > 0 && $value > $randomNumbers[$index - 1] && $value > $temp) {
            $temp = $value;
        }
    }


return $temp;
}

echo 'najwieksza liczba to: ' . maxElement();
?>