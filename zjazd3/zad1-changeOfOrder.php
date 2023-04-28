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

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <label for="fileName">wybierz plik w ktorym chcesz zmienic kolejnosc</label>
    <input type="file" name="fileName" id="fileName">
    <input type="submit" value="wyslij">
    </form>



<?php
    $fileName = $_FILES['fileName']['tmp_name'];

if(!$fd = fopen($fileName, 'r+', 0)){
    echo "Nie mogę otworzyc pliku";
}
else {
    while (!feof($fd)) {
       $str = fgets($fd);
       $str = nl2br($str);
        echo $str;
    }

    $fileLine = file($fileName);
    $fileLineCount = count($fileLine);
    for($i = 0; $i <= $fileLineCount/2; $i++){
        $temp = $fileLine[$i];
        $fileLine[$i] = $fileLine[$fileLineCount-$i];
        $fileLine[$fileLineCount-$i] = $temp;
    }
    print_r($fileLine);

    while (!feof($fd)) {
        $str = fgets($fd);
        $str = nl2br($str);
        echo $str;
    }
fclose($fd);
}

?>
</body>
</html>