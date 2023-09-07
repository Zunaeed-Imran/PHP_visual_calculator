<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="calculator">
        <input type="text" id="display" class="display"><br>
        <button class="button" onclick="display('7')">7</button>
        <button class="button" onclick="display('8')">8</button>
        <button class="button" onclick="display('9')">9</button><br>
        <button class="button" onclick="display('4')">4</button>
        <button class="button" onclick="display('5')">5</button>
        <button class="button" onclick="display('6')">6</button><br>
        <button class="button" onclick="display('1')">1</button>
        <button class="button" onclick="display('2')">2</button>
        <button class="button" onclick="display('3')">3</button><br>
        <button class="button" onclick="clear('c')">C</button>
        <button class="button" onclick="display('0')">0</button>
        <button class="button" onclick="calculate('=')">=</button><br>
        <button class="button" onclick="display('+')">+</button>
        <button class="button" onclick="display('-')">-</button>
        <button class="button" onclick="display('*')">*</button>
        <button class="button" onclick="display('/')">/</button>
    </div>




    <script>

        function Display(value) {
            document.querySelector('display').value += value;
        }

        function clearDisplay() {
            document.querySelector('display').value = '';
        }

        function calculate() {
            try {
                const result = eval(document.querySelector('display').value);
                document.querySelector('display').value = result;
            } catch (error) {
                document.querySelector('display').value = 'Error';
            }
        }
        
    </script>

</body>
</html>
