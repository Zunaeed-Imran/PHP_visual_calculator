<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="number" name="num1" placeholder="1st number"><br>
        <input type="number" name="num2" placeholder="2nd number"><br>
        <input type="symbol" name="symbol" placeholder="symbol"><br>
        <button type="submit">Submit</button>
    </form>   
</body>
</html>


<?php

function calculate($num1, $num2, $symbol){
    if($symbol === '+'){
        echo $num1 + $num2;
    } elseif($symbol === '-'){
        echo $num1 - $num2;
    } elseif($symbol === '*'){
        echo $num1 * $num2;
    } elseif($symbol === '/'){
        echo $num1 / $num2;
    }
}

if(isset($_REQUEST['num1']) && isset($_REQUEST['num2']) && isset($_REQUEST['symbol'])){
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $symbol = $_REQUEST['symbol'];
    calculate($num1, $num2, $symbol); // Call the calculate function directly
}


?>






