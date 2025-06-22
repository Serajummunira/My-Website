<?php
$conn = new mysqli("your_host", "your_user", "your_pass", "your_db");
$result = $conn->query("SELECT * FROM sunset_uploads");

echo "<h2>Uploaded Images</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<p><strong>" . htmlspecialchars($row['username']) . "</strong>: " . htmlspecialchars($row['caption']) . "</p>";
    echo "<img src='" . $row['image_path'] . "' width='200'><br>";
    echo "<form method='POST' action='delete.php'>
            <input type='hidden' name='id' value='" . $row['id'] . "'>
            <input type='submit' name='delete' value='Delete'>
          </form>";
    echo "</div><hr>";
}
?>
