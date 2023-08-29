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
                <input type="button" class="btn btn-danger gap-3" name="c" value="C">
                <input type="button" class="btn btn-warning gap-3" name="equal" value="=">
                <input type="button" class="btn btn-success ml-3" name="devide" value="/"><br>
                <input type="button" class="btn btn-primary ml-3" name="num" value="7">
                <input type="button" class="btn btn-primary ml-2" name="num" value="8">
                <input type="button" class="btn btn-primary ml-2" name="num" value="9"><br>
                <input type="button" class="btn btn-primary ml-2" name="num" value="4">
                <input type="button" class="btn btn-primary ml-2" name="num" value="5">
                <input type="button" class="btn btn-primary ml-2" name="num" value="6"><br>
                <input type="button" class="btn btn-primary ml-2" name="num" value="1">
                <input type="button" class="btn btn-primary ml-2" name="num" value="2">
                <input type="button" class="btn btn-primary ml-4" name="num" value="3"><br>
                <input type="button" class="btn btn-success ml-4" name="plus" value="+">
                <input type="button" class="btn btn-success ml-4" name="subtrac" value="-">
                <input type="button" class="btn btn-success ml-4" name="multi" value="*">
            </form>

        </div>

    </div>

</div>
</body>
</html>


<?php

if(isset($_REQUEST['equal'])){

}

?>