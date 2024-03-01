<?php
require 'database.php';
// https://stackoverflow.com/questions/69950937/sanitize-html-inputs-with-php

function sanitize($input) {
    return htmlspecialchars($input);
}

$error = "";

if(isset($_POST['del'])) {
    $id = sanitize(trim($_POST['id']));
    $sql_del = "DELETE FROM videos WHERE Title = ?";
    $stmt = $conn->prepare($sql_del);
    $stmt->bind_param("s", $id);
    
    if($stmt->execute()) {
        // Deletion successful, no need for a success message here
    } else {
        $error = "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Videos</title>
    <link rel="stylesheet" type="text/css" href="deletevideos.css">
</head>
<body>

<?php if(isset($error) && $error !== "") { ?>
    <div class="alert">
        <strong><?php echo $error; ?></strong>
    </div>
<?php } ?>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Directors</th>
            <th>Producers</th>
            <th>Actors</th>
            <th>Release Date</th>
            <th>Identifier</th>
            <th>Description</th>
            <th>Language</th>
            <th>Contributors</th>
            <th>Genre</th>
            <th>Rights</th>
            <th>Type</th>
            <th>Format</th>
            <th>Summary</th>
            <th>Requester ID</th>
            <th>Keywords</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $sql = "SELECT * FROM videos";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['Title']; ?></td>
            <td><?php echo $row['Directors']; ?></td>
            <td><?php echo $row['Producers']; ?></td>
            <td><?php echo $row['Actors']; ?></td>
            <td><?php echo $row['Release_Date']; ?></td>
            <td><?php echo $row['Identifier']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <td><?php echo $row['Language']; ?></td>
            <td><?php echo $row['Contributors']; ?></td>
            <td><?php echo $row['Genre']; ?></td>
            <td><?php echo $row['Rights']; ?></td>
            <td><?php echo $row['Type']; ?></td>
            <td><?php echo $row['Format']; ?></td>
            <td><?php echo $row['Summary']; ?></td>
            <td><?php echo $row['Requester_Id']; ?></td>
            <td><?php echo $row['Keywords']; ?></td>
            <td>
                <form method='post' action='deletevideos.php'>
                    <input type='hidden' value="<?php echo $row['Title']; ?>" name='id'>
                    <input type='submit' name='del' value='Delete'>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<form action="videos.php">
    <button type="submit">Go to Videos Page</button>
</form>

</body>
</html>
