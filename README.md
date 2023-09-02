# PHP_visual_calculator
1. Boostrap background opacity can control with style.
```
<body class="p-3 mb-2 bg-secondary text-white" style="--bs-bg-opacity: .8;">

``` 
2. magrin in boostrap class
```
<div class="m-3">Margin on all sides</div>
<div class="mt-4">Top margin</div>
<div class="py-2">Padding on top and bottom</div>
<div class="ms-auto">Automatic left margin</div>

```
3. button margin is me
```
<input type="button" class="btn btn-danger me-2" name="c" value="C">
```
<<<<<<< HEAD
4. 
=======
4. "try4" have used javascript to call every single button 
>>>>>>> 8797b6e (main)

## The final calculator is "try5.php" & "cal_css.css"

5. .value it's a property of HTML input elements. in javascript i used
 -.value is a common way to interact with input elements in HTML using JavaScript to get or set their values.

6.  `try and catch` try Block: The try block is used to enclose a block of code that you expect might raise an exception or an error. You place the code that you want to monitor for errors inside this block. 

``` 
try {
    // Code that might throw an error
} catch (error) {
    // Code to handle the error
}

```

7. The eval() function 
- The eval() function in JavaScript is a powerful but potentially risky feature that allows you to dynamically execute code represented as a string. 
- 

```
<script>
let x = 10;
let y = 20;
let text = "x * y";
let result = eval(text);

document.getElementById("demo").innerHTML = result;
</script>

```
- more example
```
const x = 10;
const y = 20;
const result = eval('x + y'); // Evaluates to 30

```
-Security Risks: eval() should be used with caution because it can execute any code, 