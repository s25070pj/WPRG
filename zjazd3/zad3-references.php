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

<?php
$filename = "zad3-adress.txt";
$file = fopen($filename, "r");

echo "<p> linki: </p>";
echo "<ol>";
while(!feof($file)){
    $line = fgets($file);
    $linkList = explode(';', $line);
    echo '<li><a href="'. $linkList[0] .'" target="_blank">' . $linkList[1] .  '</a></li>';
}
echo '</ol>';

?>

</body>
</html>