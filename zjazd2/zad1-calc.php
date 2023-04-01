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

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>    podaj pierwsza liczbe</p>
    <input type="text" name="firstNumber">

    <p>    podaj druga liczbe</p>
    <input type="text" name="secondNumber">

    <p>    wybierz rownanie matematyczne:  </p>
    <p>+</p>
    <input type="radio" name="mathChoice" id="add" value="+">
    <p>-</p>
    <input type="radio" name="mathChoice" id="subtraction" value="-">
    <p>*</p>
    <input type="radio" name="mathChoice" id="multiplication" value="*">
    <p>/</p>
    <input type="radio" name="mathChoice" id="division" value="/">
    <input type="submit">
</form>


<?php
    $firstNumber = $_POST['firstNumber'];
    $secondNumber = $_POST['secondNumber'];
    $mathChoice = $_POST['mathChoice'];


    switch ($mathChoice) {
        case "+":
            echo $firstNumber + $secondNumber;
            break;
        case "-":
            echo $firstNumber - $secondNumber;
            break;
        case "*":
            echo $firstNumber * $secondNumber;
            break;
        case "/":
            if ($secondNumber == 0){
                echo "Nie dzielimy przez 0!";
            }else
            echo $firstNumber / $secondNumber;
            break;
    }


?>


</body>
</html>