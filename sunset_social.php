<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <body>
        <div class="sunset-animation">
    <div class="sky">
        <div class="sun"></div>
        <div class="ocean"></div>
    </div>
</div>

<style>
    .sunset-animation {
        position: relative;
        width: 100%;
        height: 200px;
        overflow: hidden;
        background: linear-gradient(to bottom, #FF7E5F, #FEB47B);
    }

    .sky {
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, #FF5733, #FFC300);
    }

    .sun {
        position: absolute;
        left: 50%;
        top: 20%;
        width: 60px;
        height: 60px;
        background: yellow;
        border-radius: 50%;
        animation: sunset 5s linear infinite alternate;
        transform: translateX(-50%);
    }

    .ocean {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 30%;
        background: #1E3A8A;
        box-shadow: 0px -10px 20px rgba(0, 0, 0, 0.5);
    }

    @keyframes sunset {
        0% {
            top: 20%;
            background: yellow;
        }
        100% {
            top: 80%;
            background: orange;
        }
    }
</style>
    </body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunset Social Media</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
    font-family: 'Arial', sans-serif;
    text-align: center;
    background: linear-gradient(to bottom, #ff9966, #ff5e62); /* Sunset Gradient */
    color: white;
    margin: 0;
}

header {
    background: rgba(255, 153, 51, 0.9); /* Sunset Orange */
    padding: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

.logo {
    width: 100px;
    height: auto;
}

h1, h2 {
    font-family: 'Georgia', serif;
}

.upload-section, .sunset-feed {
    background: rgba(255, 255, 255, 0.2);
    padding: 20px;
    border-radius: 10px;
    margin: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

button {
    background: #ff5e62;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background: #ff9966;
}

.post {
    background: rgba(255, 255, 255, 0.2);
    padding: 10px;
    border-radius: 8px;
    margin: 10px auto;
    width: 80%;
}

.post img {
    width: 100%;
    border-radius: 8px;
    max-width: 400px;
}
</style>

 <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #FF7E5F, #FEB47B);
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        header {
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .content {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }
        h2 {
            color: #FFD700;
        }
        a {
            color: #FFD700;
            font-weight: bold;
            text-decoration: none;
        }
        .post {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            margin: 15px 0;
            border-radius: 10px;
        }
        .like-btn, .comment-btn, .upload-btn {
            background-color: #FFD700;
            border: none;
            padding: 8px 15px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
        }
        .like-btn:hover, .comment-btn:hover, .upload-btn:hover {
            background-color: #FFC300;
        }
        .comment-section {
            display: none;
            margin-top: 10px;
        }
        .comment-box {
            width: 80%;
            padding: 5px;
        }
    </style>
    <script>
        function likePost(postId) {
            let likeCount = document.getElementById('like-count-' + postId);
            let count = parseInt(likeCount.innerText) + 1;
            likeCount.innerText = count;
        }

        function toggleComment(postId) {
            let commentSection = document.getElementById('comment-section-' + postId);
            commentSection.style.display = commentSection.style.display === "none" ? "block" : "none";
        }

        function addComment(postId) {
            let commentInput = document.getElementById('comment-input-' + postId);
            let commentText = commentInput.value.trim();
            if (commentText !== "") {
                let commentList = document.getElementById('comment-list-' + postId);
                let newComment = document.createElement("p");
                newComment.innerText = commentText;
                commentList.appendChild(newComment);
                commentInput.value = "";
            }
        }
    </script>
</head>
<body>
    <header>
    <?php
if (!isset($_SESSION['username'])) {
    echo "<p><a href='register.php'>Register</a> | <a href='index.php'>Login</a></p>";
}
?>

        <img src="https://imgur.com/YmIfu2F.png" alt="Sunset Social Logo" class="logo">
        <h1>Welcome to the Sunset Social Media Site!</h1>
        <p>Share your breathtaking sunset moments with the world. 🌅✨</p>
    </header>
     <h2>Upload Your Sunset Photo 🌇</h2>
     <?php
$host = "sql312.infinityfree.com";
$user = "if0_38156714";
$pass = "Sminfosys0829";
$db = "if0_38156714_sunsetuploads";  // example: if0_38156714_sunsetuploads

$conn = new mysqli($host, $user, $pass, $db);

// File upload handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $username = $_POST['username'];
    $caption = $_POST['caption'];

    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true); // create uploads folder
    }

    $imageName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $imageName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        $stmt = $conn->prepare("INSERT INTO sunset_uploads (username, caption, image_path) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $caption, $targetFilePath);
        $stmt->execute();
        echo "<p style='color:green;'>Image uploaded successfully!</p>";
    } else {
        echo "<p style='color:red;'>File upload failed!</p>";
    }
}

// Handle delete
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $result = $conn->query("SELECT image_path FROM sunset_uploads WHERE id = $id");
    $row = $result->fetch_assoc();
    if ($row && file_exists($row['image_path'])) {
        unlink($row['image_path']); // delete file from folder
    }
    $conn->query("DELETE FROM sunset_uploads WHERE id = $id");
    echo "<p style='color:red;'>Image deleted.</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
<body>
   </head>
    <form method="POST" enctype="multipart/form-data">
        Username: <input type="text" name="username" required><br>
        Caption: <input type="text" name="caption" required><br>
        Select image: <input type="file" name="image" required><br>
        <input type="submit" value="Upload 🌄">
    </form>

    <hr>
    <h2>Uploaded Photos</h2>
    <?php
    $result = $conn->query("SELECT * FROM sunset_uploads ORDER BY upload_time DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<strong>" . htmlspecialchars($row['username']) . "</strong><br>";
        echo "<em>" . htmlspecialchars($row['caption']) . "</em><br>";
        echo "<img src='" . $row['image_path'] . "' width='300'><br>";
        echo "<form method='POST' style='margin-top:5px;'>
                <input type='hidden' name='id' value='" . $row['id'] . "'>
                <input type='submit' name='delete' value='Delete'>
              </form>";
        echo "<hr>";
        echo "</div>";
    }
    ?>
   
</body>
</html>

     
    <section class="sunset-feed">
        <h2>🌅 Recent Sunset Posts</h2>
        <div class="post">
            <img src="https://imgur.com/sgr6jC7.jpg" alt="Beautiful Sunset">
            <p>🌇 Amazing sunset at the beach from Florida! - User123</p>
             <button class="like-btn" onclick="likePost(1)">Like ❤️</button> <span id="like-count-1">0</span> Likes
            <button class="comment-btn" onclick="toggleComment(1)">Comment 💬</button>
        </div>
         <div class="comment-section" id="comment-section-1">
                <input type="text" class="comment-box" id="comment-input-1" placeholder="Write a comment...">
                <button class="comment-btn" onclick="addComment(1)">Post</button>
                <div id="comment-list-1"></div>
            </div>
        <div class="post">
            <img src="https://imgur.com/StwJeHh.jpg" alt="Mountain Sunset">
            <p>🌄 Mountain view sunset - NatureLover</p>
             <button class="like-btn" onclick="likePost(1)">Like ❤️</button> <span id="like-count-1">0</span> Likes
            <button class="comment-btn" onclick="toggleComment(1)">Comment 💬</button>

        </div>
         <div class="comment-section" id="comment-section-1">
                <input type="text" class="comment-box" id="comment-input-1" placeholder="Write a comment...">
                <button class="comment-btn" onclick="addComment(1)">Post</button>
                <div id="comment-list-1"></div>
            </div>
    </section>

     <div class="post">
            <img src="https://imgur.com/WtPv0jt.jpg" alt="Sunset Post 1" width="100%">
            <p><strong>Sunset in Hawaii 🌅</strong></p>
            <button class="like-btn" onclick="likePost(1)">Like ❤️</button> <span id="like-count-1">0</span> Likes
            <button class="comment-btn" onclick="toggleComment(1)">Comment 💬</button>

            <div class="comment-section" id="comment-section-1">
                <input type="text" class="comment-box" id="comment-input-1" placeholder="Write a comment...">
                <button class="comment-btn" onclick="addComment(1)">Post</button>
                <div id="comment-list-1"></div>
            </div>
        </div>

        <div class="post">
            <img src="https://imgur.com/mD2UoZp.jpg" alt="Sunset Post 2" width="100%">
            <p><strong>Golden Hour in California 🌄</strong></p>
            <button class="like-btn" onclick="likePost(2)">Like ❤️</button> <span id="like-count-2">0</span> Likes
            <button class="comment-btn" onclick="toggleComment(2)">Comment 💬</button>

            <div class="comment-section" id="comment-section-2">
                <input type="text" class="comment-box" id="comment-input-2" placeholder="Write a comment...">
                <button class="comment-btn" onclick="addComment(2)">Post</button>
                <div id="comment-list-2"></div>
            </div>
        <br></br>
<h2>Some Creative Sunset Photos</h2>
 <div class="post">
            <img src="https://imgur.com/J0bmOkS.jpg" alt="Sunset Post 5" width="100%">
            <p><strong>Sunset inside the heart 🌄</strong></p>
             <button class="like-btn" onclick="likePost(1)">Like ❤️</button> <span id="like-count-1">0</span> Likes
            <button class="comment-btn" onclick="toggleComment(1)">Comment 💬</button>
            </div>
             <div class="comment-section" id="comment-section-1">
                <input type="text" class="comment-box" id="comment-input-1" placeholder="Write a comment...">
                <button class="comment-btn" onclick="addComment(1)">Post</button>
                <div id="comment-list-1"></div>
            </div>
<div class="post">
            <img src="https://imgur.com/Lhgm23D.jpg" alt="Sunset Post 6" width="100%">
            <p><strong>Fantastic Moment with Sunset 🌄</strong></p>
             <button class="like-btn" onclick="likePost(1)">Like ❤️</button> <span id="like-count-1">0</span> Likes
            <button class="comment-btn" onclick="toggleComment(1)">Comment 💬</button>
<div class="post">
            <img src="https://imgur.com/qRYXGLv.jpg" alt="Sunset Post 7" width="100%">
            <p><strong>So Cool 🌄</strong></p>
             <button class="like-btn" onclick="likePost(1)">Like ❤️</button> <span id="like-count-1">0</span> Likes
            <button class="comment-btn" onclick="toggleComment(1)">Comment 💬</button>
</div><br></br>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunset Social Media</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #FF7E5F, #FEB47B);
            color: white;
            text-align: left;
            margin: 0;
            padding: 0;
        }
        header {
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .content {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }
        h2 {
            color: #FFD700;
        }
        a {
            color: #FFD700;
            font-weight: bold;
            text-decoration: none;
        }
         .sunset {
  background: linear-gradient(to bottom, orange, skyblue);
  color: black;
}

.twilight {
  background: linear-gradient(to bottom, #4b0082, #000);
  color: white;
}

.dark {
  background-color: #121212;
  color: #eee;
}
    </style>

</head>
</body>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration - Sunset Social Media</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #ffe0b2;
      margin: 50px;
    }
    .form-container {
      background: #fff3e0;
      padding: 20px;
      width: 300px;
      border-radius: 12px;
      box-shadow: 0 0 10px #ccc;
    }
    input[type="text"], input[type="email"], input[type="password"] {
      width: 100%;
      padding: 8px;
      margin: 8px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background-color: #ff9800;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Create Account</h2>
  <form method="post" action="">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" name="register" value="Register">
  </form>

  <?php
  if (isset($_POST['register'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    echo "<p style='color: green;'>Thank you, for registering with us <strong>$username</strong>! Confirmation sent to <strong>$email</strong>.</p>";
}

  ?>
</div>
<form action="search.php" method="get">
  <input type="text" name="query" placeholder="Search sunsets..." required>
  <button type="submit">Search</button>
</form>
<?php
if (isset($_GET['query'])) {
    $search = htmlspecialchars($_GET['query']);
    echo "<h2>Results for '$search':</h2>";
    // You can later replace this with real database search
    // For now, just a placeholder message
    echo "<p>Feature under development. Will show matched posts here.</p>";
}
?><br>

<a href="profile.php" style="text-decoration:none; font-size:18px; color:#ff7043;">My Profile</a>
<select id="themeSwitcher" style="position:fixed;bottom:10px;right:10px;">
  <option value="sunset">Sunset</option>
  <option value="twilight">Twilight</option>
  <option value="dark">Dark</option>
</select>

<script>
  document.getElementById("themeSwitcher").addEventListener("change", function () {
    const theme = this.value;
    document.body.className = theme;
    localStorage.setItem("theme", theme);
  });

  document.addEventListener("DOMContentLoaded", () => {
    const saved = localStorage.getItem("theme") || "sunset";
    document.body.className = saved;
    document.getElementById("themeSwitcher").value = saved;
  });
</script>
<h3>🌇Sunset Times Around the World</h3>
<table border="1" style="width:80%;margin:auto;background:white;text-align:center;">
  <tr><th>City</th><th>Sunset Time</th></tr>
  <tr><td>New York</td><td>7:45 PM</td></tr>
  <tr><td>Los Angeles</td><td>7:58 PM</td></tr>
  <tr><td>Tokyo</td><td>6:30 PM</td></tr>
  <tr><td>Paris</td><td>8:15 PM</td></tr>
</table>
</body>
</html>
<br></br>


<?php
if (isset($_SESSION['username'])) {
    echo "<div style='text-align: center; padding: 30px;'>
            <a href='logout.php' style='
                display: inline-block;
                background-color: #ff6347;
                color: white;
                padding: 12px 24px;
                text-decoration: none;
                border-radius: 8px;
                font-size: 16px;
                font-weight: bold;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
                transition: background-color 0.3s ease;
            ' onmouseover=\"this.style.backgroundColor='#e5533d'\"
               onmouseout=\"this.style.backgroundColor='#ff6347'\">
                Logout
            </a>
          </div>";
}
?>
        
        <h3>**<a href="http://moni7310.fwh.is/index.html">Go Back to Homepage</a></h3>
    </div>
</body>
</html>


