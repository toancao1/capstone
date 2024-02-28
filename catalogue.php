<?php
$servername = "localhost";
$username = "tom";
$password = "Toronto12!";
$dbname = "library management system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tag = mysqli_real_escape_string($conn, $_POST['tag']);
    $resourceId = (int)$_POST['libraryId'];

    // Fetch existing tags for the resource
    $sql = "SELECT tags FROM library management systemWHERE id = $libraryId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $existingTags = json_decode($row['tags']);
        $existingTags[] = $tag;

        $sqlUpdate = "UPDATE library SET tags = '" . json_encode($existingTags) . "' WHERE id = $libraryId";
        $conn->query($sqlUpdate);
    }
}

$conn->close();
?>
