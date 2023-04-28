<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="l"><p id="licznik"></p></div>

<?php
    $licznik = "zad2-licznik.txt";
    if(file_exists("zad2-licznik.txt")){
        $fd = fopen($licznik, "r", 0);
        $countOfVisits = fread($fd, filesize($licznik));
        fclose($fd);
        $countOfVisits++;
        $fd = fopen($licznik, "w");
        fwrite($fd, $countOfVisits);
        fclose($fd);
    }else {
        $countOfVisits = 1;
        $fd = fopen($licznik, "w", 0);
        fwrite($fd, $countOfVisits);
        fclose($fd);
    }
    echo "Liczba wejsc: $countOfVisits";



?>
</body>
</html>