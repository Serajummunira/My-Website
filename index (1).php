<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Homepage</title>
    <style>
        /* Style for the notification and hover effect */
        .homework-ready {
            display: block;
            width: max-content;
            padding: 10px;
            background-color: #4CAF50; /* Green background */
            color: white; /* White text color */
            text-align: center;
            border-radius: 8px;
            text-decoration: none; /* No underline */
            transition: background-color 0.3s, transform 0.3s; /* Smooth transition for hover effect */
        }
        .homework-ready:hover {
            background-color: #45a049; /* Darker green background on hover */
            transform: scale(1.05); /* Slightly increase size on hover */
        }
    </style>
    <button onclick="toggleDarkMode()">Toggle Dark Mode</button>

<script>
    function toggleDarkMode() {
        document.body.classList.toggle("dark-mode");
    }
</script>

<style>
    .dark-mode {
        background-color: #121212;
        color: white;
    }
</style>
<p id="datetime"></p>

<script>
    function updateDateTime() {
        document.getElementById("datetime").innerText = new Date().toLocaleString();
    }
    setInterval(updateDateTime, 1000);
</script>
<h1 id="typewriter"></h1>

<script>
    let text = "Welcome to My Awesome Website!";
    let index = 0;

    function typeEffect() {
        if (index < text.length) {
            document.getElementById("typewriter").innerHTML += text.charAt(index);
            index++;
            setTimeout(typeEffect, 100);
        }
    }
    typeEffect();
</script>

<script>
const quotes = ["Believe in yourself!", "Stay positive!", "Never give up!", "You are capable of amazing things!"];
document.getElementById("quote").innerText = quotes[Math.floor(Math.random() * quotes.length)];
</script>
<p id="quote"></p>

<div class="social-icons">
    <a href="https://linkedin.com" target="_blank">LinkedIn</a>
    <a href="https://github.com" target="_blank">GitHub</a>
</div>
<style>
.social-icons {
    position: fixed;
    top: 50%;
    right: 10px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}
</style>
<style>
        /* CSS Styling */
        .chat-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .chat-container {
            display: none;
            position: fixed;
            bottom: 70px;
            right: 20px;
            width: 300px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
            padding: 10px;
        }

        .chat-header {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
        }

        .close-btn {
            background: red;
            color: white;
            border: none;
            cursor: pointer;
        }

        .chat-body {
            max-height: 200px;
            overflow-y: auto;
            padding: 5px;
            font-size: 14px;
        }

        input {
            width: 85%;
            padding: 5px;
        }

        .send-btn {
            background: green;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
<!-- Chatbot Button -->
<button onclick="toggleChat()" class="chat-btn">Chat with AI 💬</button>

<!-- Chatbot Container -->
<div id="chat-container" class="chat-container">
    <div class="chat-header">
        <span>AI Chatbot</span>
        <button onclick="toggleChat()" class="close-btn">X</button>
    </div>
    <div class="chat-body" id="chat-body">
        <p class="bot-msg">Hello! How can I assist you today?</p>
    </div>
    <input type="text" id="chat-input" placeholder="Type a message..." onkeypress="handleKeyPress(event)">
    <button onclick="sendMessage()" class="send-btn">Send</button>
</div>
<!-- JavaScript for Chatbot -->
    <script>
        function toggleChat() {
            let chatBox = document.getElementById("chat-container");
            chatBox.style.display = chatBox.style.display === "block" ? "none" : "block";
        }

        function sendMessage() {
            let inputField = document.getElementById("chat-input");
            let userMessage = inputField.value.trim();
            if (userMessage === "") return;

            let chatBody = document.getElementById("chat-body");

            // Display user message
            let userMsgDiv = document.createElement("p");
            userMsgDiv.classList.add("user-msg");
            userMsgDiv.textContent = "You: " + userMessage;
            chatBody.appendChild(userMsgDiv);

            inputField.value = "";

            // Fake AI response (Replace this with actual API call)
            setTimeout(() => {
                let botMsgDiv = document.createElement("p");
                botMsgDiv.classList.add("bot-msg");
                botMsgDiv.textContent = "Bot: Thanks for your message! 😊";
                chatBody.appendChild(botMsgDiv);
                chatBody.scrollTop = chatBody.scrollHeight; // Auto-scroll to latest message
            }, 1000);
        }

        // Handle enter key to send message
        function handleKeyPress(event) {
            if (event.key === "Enter") {
                sendMessage();
            }
        }
    </script>
    <p id="digital-clock" style="font-size: 24px; font-weight: bold;"></p>

<script>
    function updateClock() {
        let now = new Date();
        let timeString = now.toLocaleTimeString();
        document.getElementById("digital-clock").innerText = timeString;
    }
    setInterval(updateClock, 1000);
    updateClock(); // Initial call
</script>

<?php
echo "Current date and time is: " . date("Y-m-d H:i:s");
?>
<br></br>
<label for="colorPicker">Choose Theme Color:</label>
<input type="color" id="colorPicker" value="#ff1493" onchange="changeColor()">

<script>
    function changeColor() {
        document.body.style.backgroundColor = document.getElementById("colorPicker").value;
    }
</script>
<p id="greeting" style="font-size: 20px; font-weight: bold;"></p>

<script>
    let hour = new Date().getHours();
    let greeting = "Good Evening 🌙";
    if (hour < 12) {
        greeting = "Good Morning ☀️";
    } else if (hour < 18) {
        greeting = "Good Afternoon 🌤";
    }
    document.getElementById("greeting").innerText = greeting;
</script>
<button id="scrollTopBtn" onclick="scrollToTop()">⬆️</button>

<style>
    #scrollTopBtn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
        background: blue;
        color: white;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>


    <h1>Welcome to My Homepage</h1>
    </head>
<body>
<?php
echo "Welcome to my Homework Hub!";
?>
    <p>Check out my assignments:</p>
    <a href="http://moni7310.fwh.is/hw1.html" class="homework-ready">Homework 1 is ready for grading!</a>
    <a href="http://moni7310.fwh.is/hw2.html">Homework 2 - Ready for Grading</a>
    <p><a href="http://moni7310.fwh.is/hw3.html">Homework 3 is ready for grading!<a></p>
    <p><a href="http://moni7310.fwh.is/hw4.html">Homework 4 is ready for grading!<a></p>
     <p><a href="http://moni7310.fwh.is/hw5_js_explanation.html">Homework 5 is ready for grading!<a></p>
     <a href="http://moni7310.fwh.is/hw6.html" class="sparkle-text" target="_blank">
            Homework 6 is ready for grading!
        </a>
    <p><a href="http://moni7310.fwh.is/hw7.html">Homework 7 is ready for grading!<a></p>
     <p><a href="http://moni7310.fwh.is/hw8.html">Homework 8 is ready for grading!<a></p>
    <p><a href="http://moni7310.fwh.is/hw9.html">Homework 9 is ready for grading!<a></p>
     <p><a href="http://moni7310.fwh.is/hw10.html">Homework 10 is ready for grading!<a></p>
     <p><a href="http://moni7310.fwh.is/hw11.html">Homework 11 is ready for grading!<a></p>
    <p><a href="http://moni7310.fwh.is/hw12.html">Homework 12 is ready for grading!<a></p>
    <p><a href="http://moni7310.fwh.is/hw14.html">Homework 14 is ready for grading!<a></p>
    <p><a href="sunset_social.php">Visit the Sunset Social Media Site 🌅</a></p>

<textarea id="text-area" rows="4" cols="50" oninput="countWords()"></textarea>
<p>Word Count: <span id="word-count">0</span></p>

<script>
    function countWords() {
        let text = document.getElementById("text-area").value.trim();
        document.getElementById("word-count").innerText = text ? text.split(/\s+/).length : 0;
    }
</script>
<button onclick="getJoke()">Get a Joke 😂</button>
<p id="joke"></p>

<script>
    async function getJoke() {
        let response = await fetch('https://official-joke-api.appspot.com/random_joke');
        let joke = await response.json();
        document.getElementById("joke").innerHTML = `${joke.setup} <br><b>${joke.punchline}</b>`;
    }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @keyframes sparkle {
            0% { opacity: 0.7; text-shadow: 0 0 5px white, 0 0 10px pink, 0 0 15px hotpink; }
            50% { opacity: 1; text-shadow: 0 0 10px white, 0 0 20px pink, 0 0 30px hotpink; }
            100% { opacity: 0.7; text-shadow: 0 0 5px white, 0 0 10px pink, 0 0 15px hotpink; }
        }

        .sparkle-text {
            font-size: 24px;
            font-weight: bold;
            color: pink;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            animation: sparkle 1s infinite alternate;
        }

        .sparkle-text:hover {
            color: hotpink;
        }
    </style>
</head>
<body>

    <h3 style="text-align: center;">
    </h3>

</body>
</html>
<?php
if (isset($_SESSION['username'])) {
    echo "<p>Hello, " . $_SESSION['username'] . "! You are logged in.</p>";
    echo '<form method="POST" action="logout.php">
            <button type="submit">Logout</button>
          </form>';
} else {
    echo '<form method="POST" action="login.php">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
          </form>
          <p>Don\'t have an account? <a href="http://moni7310.fwh.is/register.php">Register here</a></p>';
}
?>



 <!DOCTYPE html>
<html lang="en">
<head>
   
<?php
// Define the file that stores the count
$counterFile = "counter.txt";

// Check if the file exists; if not, create it with initial value 0
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

// Read the current count
$currentCount = (int)file_get_contents($counterFile);

// Increment the count
$currentCount++;

// Save the new count back to the file
file_put_contents($counterFile, $currentCount);

// Display the count

?>
<p style="font-size: 1.2em; color: #28a745;">
  👁️‍🗨️ This page has been visited <strong><?php echo $currentCount; ?></strong> times.
</p>

</body>
</html>
