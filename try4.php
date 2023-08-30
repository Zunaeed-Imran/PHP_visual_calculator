<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>


<body class="p-3 mb-2 bg-secondary text-white" style="--bs-bg-opacity: .8;">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="try4.php" method="$_GET">
                <input type="text" class="display form-control" name="display">
                <input type="button" class="btn btn-success me-2" name="symbol" value="+">
                <input type="button" class="btn btn-success me-2" name="symbol" value="-">
                <input type="button" class="btn btn-success me-2" name="symbol" value="*">
                <input type="button" class="btn btn-success me-2" name="symbol" value="/"><br>
                <input type="button" class="btn btn-primary me-2" name="num" value="7">
                <input type="button" class="btn btn-primary me-2" name="num" value="8">
                <input type="button" class="btn btn-primary me-2" name="num" value="9"><br>
                <input type="button" class="btn btn-primary me-2" name="num" value="4">
                <input type="button" class="btn btn-primary me-2" name="num" value="5">
                <input type="button" class="btn btn-primary me-2" name="num" value="6"><br>
                <input type="button" class="btn btn-primary me-2" name="num" value="1">
                <input type="button" class="btn btn-primary me-2" name="num" value="2">
                <input type="button" class="btn btn-primary me-2" name="num" value="3"><br>
                <input type="button" class="btn btn-danger me-2" name="c" value="C">           
                <input type="button" class="btn btn-primary me-2" name="num" value="0">
                <input type="button" class="btn btn-warning me-2" name="equal" value="=">               
                
                
            </form>

        </div>

    </div>

</div>


<script>
        document.addEventListener("DOMContentLoaded", function() {
            const display = document.querySelector(".display");

            document.querySelectorAll("[name='num'],[name='symbol']").forEach(button => {
                button.addEventListener("click", function() {
                    display.value += button.value;
                });
            });

            // Add similar event listeners for other buttons (operators, clear, etc.).
        });
 </script>
</body>
</html>


<?php

function calculate($num, $symbol)
{
    if ($symbol === '+') {
        echo $num + $num;
    } elseif ($symbol === '-') {
        echo $num - $num;
    } elseif ($symbol === '*') {
        echo $num * $num;
    } elseif ($symbol === '/') {
        echo $num / $num;
    } 
}

if (isset($_REQUEST['num']) && isset($_REQUEST['c']) && isset($_REQUEST['equal'])  && isset($_REQUEST['symbol'])) {
    $num = $_REQUEST['num'];
    $symbol = $_REQUEST['symbol'];
    $c = $_REQUEST['c'];
    $equal = $_REQUEST['equal'];
    calculate($num, $symbol); 
}


?>