<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="php.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

    <form action="index.php" method="get">
        <div>
          <input type="number" name="num1" placeholder="1st number">
        </div>
        <div>
          <input type="number" name="num2" placeholder="2nd number">
        </div>
        <div>
          <input type="symbol" name="symbol" placeholder="symbol"><br>
        </div>
        <div>
          <button type="submit">Submit</button>
        </div>
        
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






