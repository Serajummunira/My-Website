<?php
session_start();
if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] == 0) {
    $target_dir = "uploads/";
    $filename = basename($_FILES["profile_photo"]["name"]);
    $target_file = $target_dir . $filename;
    move_uploaded_file($_FILES["profile_photo"]["tmp_name"], $target_file);
    $_SESSION['profile_photo'] = $filename;
    header("Location: profile.php"); // or wherever you want to redirect
}
?>
