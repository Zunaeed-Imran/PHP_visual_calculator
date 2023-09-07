<!-- make calculator without using eval function -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" class="display" id="display"><br>
    <button class="button" onclick="Display('7')">7</button>
    <button class="button" onclick="Display('8')">8</button>
    <button class="button" onclick="Display('9')">9</button><br>
    <button class="button" onclick="Display('4')">4</button>
    <button class="button" onclick="Display('5')">5</button>
    <button class="button" onclick="Display('6')">6</button><br>
    <button class="button" onclick="Display('1')">1</button>
    <button class="button" onclick="Display('2')">2</button>
    <button class="button" onclick="Display('3')">3</button><br>
    <button class="button" onclick="clearDisplay()">C</button>
    <button class="button" onclick="Display('0')">0</button>
    <button class="button" onclick="calculate()">=</button><br>
    <button class="button" onclick="Display('+')">+</button>
    <button class="button" onclick="Display('-')">-</button>
    <button class="button" onclick="Display('*')">*</button>
    <button class="button" onclick="Display('/')">/</button>


    <script>
        function Display(value){
            document.getElementById('display').value += value;
        }

        function clearDisplay(){
            document.getElementById('display').value = '';
        }

        function calculate(){
            const result = eval(document.getElementById('display').value); 
            document.getElementById('display').value = result;
        }


    </script>
</body>
</html>