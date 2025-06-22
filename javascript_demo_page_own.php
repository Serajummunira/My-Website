<?php
    echo "Welcome! This is a PHP-generated message at the top of the page.<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML + JavaScript + PHP Demo</title>
    <script>
        function checkCondition() {
            let num = 10;
            if (num > 5) {
                alert("Number is greater than 5 (if statement demo).");
            }
        }

        function checkMultipleConditions() {
            let num = 10;
            if (num > 10) {
                alert("Number is greater than 10.");
            } else if (num == 10) {
                alert("Number is exactly 10 (else if statement demo).");
            } else {
                alert("Number is less than 10.");
            }
        }

        function loopExample() {
            let count = 0;
            while (count < 3) {
                alert("Loop iteration: " + count);
                count++;
            }
        }
    </script>
    </head>
<body>

    <h1>PHP, JavaScript, and HTML Demo Page</h1>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #2c3e50;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        button:hover {
            background: #2980b9;
        }
        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <body  onload="displayCurrentTime()">

    <!-- Display Current Date and Time on Page Load -->
    <h3>Current Date & Time: <span id="currentTime"></span></h3>

    <div class="container">


    <h2>PHP Output Below:</h2>
    <?php
        echo "<p>This is another PHP message inside the body.</p>";
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #2c3e50;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        button:hover {
            background: #2980b9;
        }
        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
<h2>** 4 JavaScript Command Demos and PHP Equivalent</h2>
<h2>1. PHP Sort Names Alphabetically</h2>
<!-- 1. Array Sort Demo -->
    <div class="button-container">
        <button onclick="sortArray()"> Sort Names Alphabetically</button>
        <p id="arrayOutput"></p>
        <p>This command sorts an array of names in alphabetical order.</p>
    </div>
<strong>The code:</strong>
<pre>
&lt;?php
$names = ["Alice", "Bob", "David", "Emily", "John"];
sort($names);
foreach ($names as $name) {
    echo $name . "&lt;br&gt;";
}
?&gt;
</pre>

<strong>The demo of the code running:</strong><br>
<?php
$names = ["Alice", "Bob", "David", "Emily", "John"];
sort($names);
foreach ($names as $name) {
    echo $name . "<br>";
}
?>

<!-- JavaScript while loop -->
<div class="demo-section">
  <h2>2. JavaScript while loop</h2>
  <button onclick="showNumbers()">Show Numbers</button>
  <p id="loopOutput"></p>
  <script>
    function showNumbers() {
      let i = 1;
      let text = "";
      while (i <= 5) {
        text += i + " ";
        i++;
      }
      document.getElementById("loopOutput").innerText = text;
    }
  </script>

  <h3>PHP equivalent - while loop</h3>
  <strong>The code:</strong>
  <pre>
&lt;?php
$i = 1;
while ($i &lt;= 5) {
    echo $i . " ";
    $i++;
}
?&gt;
  </pre>

  <strong>The demo of the code running:</strong><br>
  <?php
    $i = 1;
    while ($i <= 5) {
      echo $i . " ";
      $i++;
    }
  ?>
</div>

<!-- JavaScript change background color -->
<h2>3. PHP Equivalent – Change Background Color</h2>
 <!-- Background Color Change -->
    <div class="button-container">
        <button onclick="changeBgColor()"> Change Background Color</button>
        <p> This command changes the background color randomly.</p>
    </div>
<strong>The code:</strong>
<pre>
&lt;?php
$bg = "lavender"; // or any color
echo "&lt;style&gt;body { background-color: $bg; }&lt;/style&gt;";
?&gt;
</pre>

<strong>The demo of the code running:</strong><br>
<?php
$bg = "lavender"; // Change the color if you want
echo "<style>body { background-color: $bg; }</style>";
?>
<p>This page background color was changed by PHP.</p>
<!-- JavaScript current date and time -->
<div class="demo-section">
  <h2>4. JavaScript Current Date and Time</h2>
  <button onclick="showDate()">Show Date</button>
  <p id="dateOutput"></p>
  <script>
    function showDate() {
      document.getElementById("dateOutput").innerText = new Date().toString();
    }
  </script>

  <h3> PHP equivalent - current date and time</h3>
  <strong>The code:</strong>
  <pre>
&lt;?php
echo date("Y-m-d H:i:s");
?&gt;
  </pre>

  <strong>The demo of the code running:</strong><br>
  <?php
    echo date("Y-m-d H:i:s");
  ?>
</div>
<br>

<h1>JavaScript Command Demonstrations:</h1>
<h2>***4 New PHP Commands as per requirements of HW-12:</h2>
<p>1. strrev() - This command reverses a string.</p>

<p>2. number_format() - This formats a number with commas and decimal points.</p>

<p>3. explode() - This command splits a string into an array.</p>

<p>4. strlen() – Get the length of a string.</p>

<div class="demo-block">
    <?php
    echo "<h3>Demo of PHP strrev() command</h3>";
    echo "<pre>";
    echo 'The code:' . "\n";
    echo 'echo strrev(\"Sunset\");';
    echo "</pre>";
    echo "The demo of the code running:<br>";
    echo strrev("Sunset");
    ?>
</div>

<div class="demo-block">
    <?php
    echo "<h3>Demo of PHP number_format() command</h3>";
    echo "<pre>";
    echo 'The code:' . "\n";
    echo 'echo number_format(1234567.89, 2);';
    echo "</pre>";
    echo "The demo of the code running:<br>";
    echo number_format(1234567.89, 2);
    ?>
</div>

<div class="demo-block">
    <?php
    echo "<h3>Demo of PHP explode() command</h3>";
    echo "<pre>";
    echo 'The code:' . "\n";
    echo '$str = "Sunset,Beach,Ocean";' . "\n";
    echo '$arr = explode(\",\", $str);' . "\n";
    echo 'print_r($arr);';
    echo "</pre>";
    echo "The demo of the code running:<br>";
    $str = "Sunset,Beach,Ocean";
    $arr = explode(",", $str);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    ?>
</div>

<div class="demo-block">
<?php
echo "<h3>Demo of PHP strlen() command</h3>";
echo "<pre>";
echo 'The code:';
echo "\n" . 'echo strlen("Sunset");';
echo "</pre>";
echo "The demo of the code running:<br>";
echo strlen("Sunset");
?>
</div>
    <br>
    <button onclick="checkMultipleConditions()">Else If Statement Demo</button>
    <button onclick="checkCondition()">If Statement Demo</button>
    <button onclick="loopExample()">While Loop Demo</button>

        <!-- If..else Statement -->
        <p>Click the button to check if a number is greater than 10 using an <b>if statement</b>.</p>
        <button onclick="checkIfStatement()">Test If Statement</button>
        <p id="if-result"></p>

        <!-- If...Else Statement -->
        <p>Click the button to test an <b>if...else statement</b> with user input.</p>
        <button onclick="checkIfElse()">Test If...Else</button>
        <p id="ifelse-result"></p>

        <!-- Else If Construct -->
        <p>Click the button to check multiple conditions using an <b>else if</b> construct.</p>
        <button onclick="checkElseIf()">Test Else If</button>
        <p id="elseif-result"></p>

        <!-- While Loop -->
        <p>Click the button to demonstrate a <b>while loop</b> that counts from 1 to 5.</p>
        <button onclick="runWhileLoop()">Run While Loop</button>
        <p id="while-result"></p>

        <!-- Do...While Loop -->
        <p>Click the button to demonstrate a <b>do...while loop</b> that runs at least once.</p>
        <button onclick="runDoWhileLoop()">Run Do...While Loop</button>
        <p id="dowhile-result"></p>
    </div>
    </head>
<body>
    
    <!-- 1. Array Sort Demo -->
    <div class="button-container">
        <button onclick="sortArray()"> Sort Names Alphabetically</button>
        <p id="arrayOutput"></p>
        <p>This command sorts an array of names in alphabetical order.</p>
    </div>

    <!-- 2. Background Color Change -->
    <div class="button-container">
        <button onclick="changeBgColor()"> Change Background Color</button>
        <p> This command changes the background color randomly.</p>
    </div>


    <!-- 5. Loop Sum from 0 to 199 -->
    <div class="button-container">
        <button onclick="sumNumbers()"> Sum Numbers 0 to 199</button>
        <p id="sumOutput"></p>
        <p>This command calculates the sum of numbers from 0 to 199.</p>
    </div>

    <!-- 6. Mouse Hover Effect -->
    <div class="button-container">
        <p class="hover-text" id="hoverEffect" onmouseover="hoverChange()" onmouseout="hoverReset()">
            Hover over this text to change it!
        </p>
        <p> This command changes the text when hovered over.</p>
    </div>
    <!-- 1. Check if a Number is Prime -->
    <div class="button-container">
        <input type="number" id="primeNumber" placeholder="Enter a number">
        <button onclick="checkPrime()"> Check Prime</button>
        <p id="primeOutput"></p>
    </div>
    <!-- 3. Generate Random Password -->
    <div class="button-container">
        <button onclick="generatePassword()"> Generate Password</button>
        <p id="passwordOutput"></p>
    </div>

    <!-- 4. Find Largest Number in Array -->
    <div class="button-container">
        <button onclick="findLargest()"> Find Largest in [12, 45, 67, 89, 23]</button>
        <p id="largestOutput"></p>
    </div>

    <!-- 5. Copy Text to Clipboard -->
    <div class="button-container">
        <input type="text" id="copyText" value="Copy this text">
        <button onclick="copyToClipboard()"> Copy Text</button>
        <p id="copyMessage"></p>
    </div>


    <!-- 7. Count Vowels in a Sentence -->
    <div class="button-container">
        <input type="text" id="vowelText" placeholder="Enter a sentence">
        <button onclick="countVowels()"> Count Vowels</button>
        <p id="vowelOutput"></p>
    </div>
     
    <script>
        // Display the current date and time on page load
        function displayCurrentTime() {
            let now = new Date();
            document.getElementById("currentTime").innerText = now.toString();
        }
        // If Statement
        function checkIfStatement() {
            let number = 15; // Hardcoded number for demo
            if (number > 10) {
                document.getElementById("if-result").innerText = "The number is greater than 10.";
            }
        }

        // If...Else Statement
        function checkIfElse() {
            let age = prompt("Enter your age:");
            if (age >= 18) {
                document.getElementById("ifelse-result").innerText = "You are an adult.";
            } else {
                document.getElementById("ifelse-result").innerText = "You are a minor.";
            }
        }

        // Else If Construct
        function checkElseIf() {
            let grade = prompt("Enter your grade (A, B, C, D, or F):").toUpperCase();
            if (grade === "A") {
                document.getElementById("elseif-result").innerText = "Excellent!";
            } else if (grade === "B") {
                document.getElementById("elseif-result").innerText = "Good job!";
            } else if (grade === "C") {
                document.getElementById("elseif-result").innerText = "Average performance.";
            } else if (grade === "D") {
                document.getElementById("elseif-result").innerText = "Needs improvement.";
            } else {
                document.getElementById("elseif-result").innerText = "Failing grade.";
            }
        }

        // While Loop
        function runWhileLoop() {
            let count = 1;
            let output = "";
            while (count <= 5) {
                output += count + " ";
                count++;
            }
            document.getElementById("while-result").innerText = "While Loop Output: " + output;
        }

        // Do...While Loop
        function runDoWhileLoop() {
            let count = 1;
            let output = "";
            do {
                output += count + " ";
                count++;
            } while (count <= 5);
            document.getElementById("dowhile-result").innerText = "Do...While Loop Output: " + output;
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Demo Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: left;
        }
        .button-container {
            margin: 10px;
        }
        .hover-text {
            color: blue;
            font-weight: bold;
        }
    </style>
<style>
        h1 {
            font-size: 30px; /* Make the heading larger */
        }

        ul {
            list-style: none; /* Remove default bullets */
            padding: 0;
        }

        ul li {
            font-size: 22px; /* Make text larger */
            display: flex;
            align-items: center; /* Align bullet with text */
            margin: 10px 0;
        }

        ul li::before {
            content: "➤"; /* Unicode for a large bullet */
            font-size: 35px; /* Adjust bullet size */
            color: black; /* Change bullet color */
            margin-right: 15px; /* Space between bullet and text */
        }
    </style>

<ul>
    <li><h1> Alphabetize the JavaScript items</h1></li>
</ul>
 <h1>**Alphabetized JavaScript Commands(According to the Button Name)</h1>
       <!-- 1. Background Color Change -->
    <div class="button-container">
        <button onclick="changeBgColor()"> Change Background Color</button>
        <p> This command changes the background color randomly.</p>
    </div>
    <!-- 2. Check if a Number is Prime -->
    <div class="button-container">
        <input type="number" id="primeNumber" placeholder="Enter a number">
        <button onclick="checkPrime()"> Check Prime</button>
        <p id="primeOutput"></p>
    </div>
     <!-- 3. Copy Text to Clipboard -->
    <div class="button-container">
        <input type="text" id="copyText" value="Copy this text">
        <button onclick="copyToClipboard()"> Copy Text</button>
        <p id="copyMessage"></p>
    </div>
    <!-- 4. Count Vowels in a Sentence -->
    <div class="button-container">
        <input type="text" id="vowelText" placeholder="Enter a sentence">
        <button onclick="countVowels()"> Count Vowels</button>
        <p id="vowelOutput"></p>
    </div>
<!--5. Do...While Loop -->
        <p>Click the button to demonstrate a <b>do...while loop</b> that runs at least once.</p>
        <button onclick="runDoWhileLoop()"> Do...While Loop</button>
        <p id="dowhile-result"></p>
    </div>
    <!--6. Else If statement-->
<button onclick="checkMultipleConditions()">Else If Statement Demo</button>
<!-- 7. Find Largest Number in Array -->
    <div class="button-container">
        <button onclick="findLargest()"> Find Largest in [12, 45, 67, 89, 23]</button>
        <p id="largestOutput"></p>
    </div>
<!-- 8. Generate Random Password -->
    <div class="button-container">
        <button onclick="generatePassword()"> Generate Password</button>
        <p id="passwordOutput"></p>
    </div>
<!-- 9. Mouse Hover Effect -->
    <div class="button-container">
        <p class="hover-text" id="hoverEffect" onmouseover="hoverChange()" onmouseout="hoverReset()">
            Hover over this text to change it!
        </p>
        <p> This command changes the text when hovered over.</p>
    </div>
    <!--10. If statement-->
<button onclick="checkCondition()">If Statement Demo</button>
<!--11. While Loop -->
        <p>Click the button to demonstrate a <b>while loop</b> that counts from 1 to 5.</p>
        <button onclick="runWhileLoop()">Run While Loop</button>
        <p id="while-result"></p>
<!-- 12. Array Sort Demo -->
    <div class="button-container">
        <button onclick="sortArray()"> Sort Names Alphabetically</button>
        <p id="arrayOutput"></p>
        <p>This command sorts an array of names in alphabetical order.</p>
    </div>
<!-- 13. Loop Sum from 0 to 199 -->
    <div class="button-container">
        <button onclick="sumNumbers()"> Sum Numbers 0 to 199</button>
        <p id="sumOutput"></p>
        <p>This command calculates the sum of numbers from 0 to 199.</p>
    </div>
<!-- 14. If Statement -->
        <p>Click the button to check if a number is greater than 10 using an <b>if statement</b>.</p>
        <button onclick="checkIfStatement()">Test If Statement</button>
        <p id="if-result"></p>

        <!--15.  If...Else Statement -->
        <p>Click the button to test an <b>if...else statement</b> with user input.</p>
        <button onclick="checkIfElse()">Test If...Else</button>
        <p id="ifelse-result"></p>

        <!--16.  Else If Construct -->
        <p>Click the button to check multiple conditions using an <b>else if</b> construct.</p>
        <button onclick="checkElseIf()">Test Else If</button>
        <p id="elseif-result"></p>
 <!--17. While Loop-->
 <button onclick="loopExample()">While Loop Demo</button>

    <script>
        function countVowels() {
            let text = document.getElementById("textInput").value;
            let count = (text.match(/[aeiou]/gi) || []).length;
            document.getElementById("vowelOutput").innerText = "Vowel Count: " + count;
        }
    </script>
    
    <script>
        function sumNumbers() {
            let sum = 0;
            for (let i = 0; i < 200; i++) { sum += i; }
            document.getElementById("sumOutput").innerText = "Sum: " + sum;
        }
    </script>
    
    <script>
        function isPrime(n) {
            if (n < 2) return false;
            for (let i = 2; i <= Math.sqrt(n); i++) {
                if (n % i === 0) return false;
            }
            return true;
        }
        function checkPrime() {
            let num = parseInt(document.getElementById("primeInput").value);
            document.getElementById("primeOutput").innerText = num + " is " + (isPrime(num) ? "Prime" : "Not Prime");
        }
    </script>
    <script>
        function findLargest() {
            let numbers = [12, 78, 45, 89, 23, 100, 67];
            let max = Math.max.apply(null, numbers);
            document.getElementById("largestOutput").innerText = "Largest Number: " + max;
        }
    </script>
    
    <script>
        function generatePassword() {
            let password = Math.random().toString(36).slice(-8);
            document.getElementById("passwordOutput").innerText = "Generated Password: " + password;
        }
    </script>
    <script>
        function copyText() {
            let text = document.getElementById("copyInput").value;
            navigator.clipboard.writeText(text);
            document.getElementById("copyOutput").innerText = "Text copied!";
        }
    </script>
   
    <script>

        // 1. Array Sort Demo
        function sortArray() {
            let names = ["John", "Alice", "Bob", "David", "Emily"];
            names.sort();
            document.getElementById("arrayOutput").innerText = "Sorted Names: " + names.join(", ");
        }

        // 2. Background Color Change
        function changeBgColor() {
            const colors = ["red", "blue", "green", "purple", "orange", "yellow"];
            document.body.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        }


        // 5. Loop Sum from 0 to 199
        function sumNumbers() {
            let sum = 0;
            for (let i = 0; i < 200; i++) {
                sum += i;
            }
            document.getElementById("sumOutput").innerText = "Sum: " + sum;
        }

        // 6. Mouse Hover Effect
        function hoverChange() {
            document.getElementById("hoverEffect").innerText = "You hovered over me!";
        }

        function hoverReset() {
            document.getElementById("hoverEffect").innerText = "Hover over this text to change it!";
        }

    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: left;
        }
        button {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        #date-time {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .output {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Demo Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        button { margin: 5px; padding: 10px; cursor: pointer; }
        #datetime { font-size: 1.2em; font-weight: bold; color: blue; }
        .output { font-weight: bold; color: green; }
    </style>
</head>

    <script>

        // JavaScript Commands - Alphabetized
        function arrayMethods() {
            let arr = ["Apple", "Banana"];
            arr.push("Cherry");
            arr.pop();
            document.getElementById("arrayOutput").innerText = "Using `push()`, `pop()`: " + arr;
        }

        function colorGradient() {
            let element = document.getElementById("gradientOutput");
            element.style.background = "linear-gradient(to right, red, yellow)";
            element.style.color = "white";
            element.style.padding = "10px";
        }

        function sumLoop() {
            let sum = 0;
            for (let i = 0; i <= 199; i++) {
                sum += i;
            }
            document.getElementById("sumOutput").innerText = "Using `for` loop (Sum 0 to 199): " + sum;
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: left;
            margin: 20px;
        }
        .button-container {
            margin: 10px;
        }
        input {
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <script>
        // 1. Check if a number is Prime
        function checkPrime() {
            let num = document.getElementById("primeNumber").value;
            num = parseInt(num);
            if (num < 2) {
                document.getElementById("primeOutput").innerText = "Not a prime number.";
                return;
            }
            for (let i = 2; i < num; i++) {
                if (num % i === 0) {
                    document.getElementById("primeOutput").innerText = "Not a prime number.";
                    return;
                }
            }
            document.getElementById("primeOutput").innerText = "It is a prime number!";
        }

        // 3. Generate a Random Password
        function generatePassword() {
            let chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";
            let password = "";
            for (let i = 0; i < 10; i++) {
                password += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById("passwordOutput").innerText = "Generated Password: " + password;
        }

        // 4. Find the Largest Number in an Array
        function findLargest() {
            let numbers = [12, 45, 67, 89, 23];
            let max = Math.max(...numbers);
            document.getElementById("largestOutput").innerText = "Largest Number: " + max;
        }

        // 5. Copy Text to Clipboard
        function copyToClipboard() {
            let copyText = document.getElementById("copyText");
            copyText.select();
            document.execCommand("copy");
            document.getElementById("copyMessage").innerText = "Text copied!";
        }

        // 7. Count Vowels in a Sentence
        function countVowels() {
            let text = document.getElementById("vowelText").value;
            let count = text.match(/[aeiouAEIOU]/g);
            let vowelCount = count ? count.length : 0;
            document.getElementById("vowelOutput").innerText = "Vowel Count: " + vowelCount;
        }
    </script>

     <p><a href="http://moni7310.fwh.is/hw10.html">Go back to Homework 10<a></p>
     <p><a href="http://moni7310.fwh.is/hw11.html">Go back to Homework 11<a></p>
     
</body>
</html>
