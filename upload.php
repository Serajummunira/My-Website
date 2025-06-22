<?php
// Database connection settings
$host = "sql312.infinityfree.com"; // Replace XXX with your actual DB host
$dbname = "if0_38156714_sunsetuploads";
$username = "if0_38156714";
$password = "Sminfosys0829"; // Replace with your actual password

// Create database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// File upload logic
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $caption = $_POST['caption'];

    $targetDir = "uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    // Move file to uploads/ folder
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        // Insert data into MySQL table
        $stmt = $conn->prepare("INSERT INTO sunset_uploads (username, caption, image_path) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $caption, $targetFilePath);

        if ($stmt->execute()) {
            echo "File uploaded and info saved to database!";
        } else {
            echo "Database error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "File upload failed.";
    }
}

$conn->close();

$targetDir = "uploads/";
$imagePath = $targetDir . basename($_FILES['image']['name']);

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);  // creates folder if missing
}

if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
    // success
} else {
    echo "File upload failed!";
}
if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
    echo "Upload error: " . $_FILES['image']['error'];
}

?>

