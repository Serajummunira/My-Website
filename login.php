<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUser = trim($_POST['username']);
    $inputPass = trim($_POST['password']);

    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    $valid = false;

    foreach ($users as $userLine) {
        list($storedUser, $storedPass) = explode(',', $userLine);

        if ($inputUser === $storedUser && password_verify($inputPass, $storedPass)) {
            $valid = true;
            $_SESSION['username'] = $inputUser;
            break;
        }
    }

    if ($valid) {
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid login.";
    }
}
?>
