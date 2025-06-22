<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <style>
        body {
            background-color: #fdebd0;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 40px;
        }
        .profile-card {
            background-color: #fff3e0;
            width: 300px;
            margin: auto;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ffcc80;
            margin-bottom: 15px;
            display: inline-block;
        }
        h2 {
            color: #ff7043;
        }
    </style>
</head>
<body>

<div class="profile-card">
    <div class="profile-pic"></div>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>This is your profile page on the Sunset Social Media platform.</p>
    <p>You can upload your beautiful sunset photos, like others’ posts, and comment to share your feelings!</p>
</div>
<?php
if (isset($_SESSION['profile_photo'])) {
  echo "<img src='uploads/" . htmlspecialchars($_SESSION['profile_photo']) . "' alt='Profile Photo' width='100' style='border-radius: 50%;'>";
}
?>

</body>
</html>
