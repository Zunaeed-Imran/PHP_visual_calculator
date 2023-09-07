<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="cal_css.css">

</head>
<body>
    <div class="calculator">
        <input type="text" class="display" id="display" >
        <button class="button" onclick="Display('7')">7</button>
        <button class="button" onclick="Display('8')">8</button>
        <button class="button" onclick="Display('9')">9</button>
        <button class="button" onclick="Display('4')">4</button>
        <button class="button" onclick="Display('5')">5</button>
        <button class="button" onclick="Display('6')">6</button>
        <button class="button" onclick="Display('1')">1</button>
        <button class="button" onclick="Display('2')">2</button>
        <button class="button" onclick="Display('3')">3</button>
        <button class="button" onclick="clearDisplay()">C</button>
        <button class="button" onclick="calculate()">=</button>
        <button class="button" onclick="Display('0')">0</button>
        <button class="button" onclick="Display('+')">+</button>
        <button class="button" onclick="Display('-')">-</button>
        <button class="button" onclick="Display('*')">*</button>
        <button class="button" onclick="Display('/')">/</button>
    </div>

    <script>

        function Display(value) {
            document.getElementById('display').value += value;
        }

        function clearDisplay() {    // if i only name clear it won't work
            document.getElementById('display').value = '';
        }

        function calculate() {
            try {
                const result = eval(document.getElementById('display').value);
                document.getElementById('display').value = result;
            } catch (error) {
                document.getElementById('display').value = 'Error';
            }
        }
        
    </script>
</body>
</html>






<?php


?>
