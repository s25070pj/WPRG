<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad 4</title>
</head>
<body>

<?php
$isCorrectIp = false;
$file = fopen("zad4-ip.txt", 'r');
while(!feof($file)) {
    $line = fgets($file);
    if (strpos($line, $_SERVER['REMOTE_ADDR']) !== false) {
        $isCorrectIp = true;
    }
}
if($isCorrectIp){
    include 'zad4-admin.php';
}else{
    include 'zad4-root.php';
}
?>


</body>
</html>
