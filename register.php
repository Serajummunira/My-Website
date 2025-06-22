<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === "" || $password === "") {
        echo "Please fill in both fields.";
    } else {
        $users = file('users.txt', FILE_IGNORE_NEW_LINES);
        $userExists = false;

        foreach ($users as $userLine) {
            list($storedUser, ) = explode(',', $userLine);
            if ($storedUser === $username) {
                $userExists = true;
                break;
            }
        }

        if ($userExists) {
            echo "Username already taken.";
        } else {
            $entry = $username . "," . password_hash($password, PASSWORD_DEFAULT) . "\n";
            file_put_contents('users.txt', $entry, FILE_APPEND);
            echo "Registration successful! <a href='index.php'>Login now</a>";
        }
    }
}
?>
<form method="POST" action="">
  <h2>Register</h2>
  <input type="text" name="username" placeholder="Choose a username" required><br>
  <input type="password" name="password" placeholder="Choose a password" required><br>
  <button type="submit">Register</button>
</form>
<form action="upload_profile_photo.php" method="post" enctype="multipart/form-data">
  <label for="profile_photo">Upload Profile Picture:</label>
  <input type="file" name="profile_photo" id="profile_photo">
  <input type="submit" value="Upload">
</form>

