<?php

function showMultiplicationTable($sideLength) {
    for ($i = 1; $i <= $sideLength; $i++) {
        for ($j = 1; $j <= $sideLength; $j++){
            $result = $i * $j;
            if ($result > 9) {
                echo $result . ' ';
            }else
                echo $result . '  ';
        }
        echo "\n";
    }
}

showMultiplicationTable(10);

?>