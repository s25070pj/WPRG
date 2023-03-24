    <?php

    $randomNumbers = array();

    function returnElementOfTable($index){
        for ($i = 0; $i < 50; $i++){
            $randomNumbers[] =  mt_rand(0,300);
        }
        return $randomNumbers[$index];
    }


    echo returnElementOfTable(5);

    ?>