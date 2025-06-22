<?php
session_start();
include 'db.php';

$upload_id = $_POST['upload_id'];
mysqli_query($conn, "UPDATE uploads SET likes = likes + 1 WHERE id = $upload_id");
header("Location: gallery.php");
?>
