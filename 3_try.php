<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="p-3 mb-2 bg-secondary text-white">
    <form action="try3.php" method="get">
        <div class="row">

            <div class="col">
                <input type="text" name="expression" class="form-control" placeholder="Enter expression">
            </div>


            <div class="col">
                <button name="seven" type="button" class="btn btn-primary btn-block">7</button>
            </div>
            <div class="col">
                <button name="eight" type="button" class="btn btn-primary btn-block">8</button>
            </div>
            <div class="col">
                <button name="nine" type="button" class="btn btn-primary btn-block">9</button>
            </div>
            <div class="col">
                <button name="plus" type="button" class="btn btn-primary btn-block">+</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button name="four" type="button" class="btn btn-primary btn-block">4</button>
            </div>
            <div class="col">
                <button name="five" type="button" class="btn btn-primary btn-block">5</button>
            </div>
            <div class="col">
                <button name="six" type="button" class="btn btn-primary btn-block">6</button>
            </div>
            <div class="col">
                <button name="minus" type="button" class="btn btn-primary btn-block">-</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button name="one" type="button" class="btn btn-primary btn-block">1</button>
            </div>
            <div class="col">
                <button name="two" type="button" class="btn btn-primary btn-block">2</button>
            </div>
            <div class="col">
                <button name="three" type="button" class="btn btn-primary btn-block">3</button>
            </div>
            <div class="col">
                <button name="multi" type="button" class="btn btn-primary btn-block">*</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button name="zero" type="button" class="btn btn-primary btn-block">0</button>
            </div>
            <div class="col">
                <button name="devide" type="button" class="btn btn-primary btn-block">/</button>
            </div>
            <div class="col">
                <button name="equal" type="button" class="btn btn-primary btn-block">=</button>
            </div>
        </div>


    </form>


</body>

</html>

<?php
if (
    isset($_GET['seven']) || isset($_GET['eight']) || isset($_GET['nine']) ||
    isset($_GET['four']) || isset($_GET['five']) || isset($_GET['six']) ||
    isset($_GET['one']) || isset($_GET['two']) || isset($_GET['three']) ||
    isset($_GET['zero']) || isset($_GET['plus']) || isset($_GET['minus']) ||
    isset($_GET['multi']) || isset($_GET['devide'])
) {

    if (isset($_GET['seven'])) echo "7";
    if (isset($_GET['eight'])) echo "8";
    if (isset($_GET['nine'])) echo "9";
    if (isset($_GET['four'])) echo "4";
    if (isset($_GET['five'])) echo "5";
    if (isset($_GET['six'])) echo "6";
    if (isset($_GET['one'])) echo "1";
    if (isset($_GET['two'])) echo "2";
    if (isset($_GET['three'])) echo "3";
    if (isset($_GET['zero'])) echo "0";
    if (isset($_GET['plus'])) echo "+";
    if (isset($_GET['minus'])) echo "-";
    if (isset($_GET['multi'])) echo "*";
    if (isset($_GET['devide'])) echo "/";
}

if (isset($_GET['equal'])) {
    // Get the concatenated expression string
    $expression = $_GET['expression'];

    // Use eval() to perform the calculation
    // Note: Using eval() can have security risks, so be cautious
    // For educational purposes only, not recommended for production
    eval('$result = ' . $expression . ';');
    echo "=$result";
}
?>