<?php
require 'database.php';
// https://stackoverflow.com/questions/69950937/sanitize-html-inputs-with-php

function sanitize($input) {
    return htmlspecialchars($input);
}

$error = "";

if(isset($_POST['del'])) {
    $id = sanitize(trim($_POST['id']));
    $sql_del = "DELETE FROM dissertations WHERE Title = ?";
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
    <title>Delete Dissertations</title>
    <link rel="stylesheet" type="text/css" href="deletedissertations.css">
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
            <th>Creators</th>
            <th>Identifier</th>
            <th>Publisher</th>
            <th>Publication Date</th>
            <th>Description</th>
            <th>Language</th>
            <th>Contributor</th>
            <th>Sources</th>
            <th>Relation</th>
            <th>Subject</th>
            <th>Rights</th>
            <th>Type</th>
            <th>Coverage</th>
            <th>Format</th>
            <th>Keywords</th>
            <th>Summary</th>
            <th>Requester ID</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $sql = "SELECT * FROM dissertations";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['Title']; ?></td>
            <td><?php echo $row['Creators']; ?></td>
            <td><?php echo $row['Identifier']; ?></td>
            <td><?php echo $row['Publisher']; ?></td>
            <td><?php echo $row['Publication_date']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <td><?php echo $row['Language']; ?></td>
            <td><?php echo $row['Contributor']; ?></td>
            <td><?php echo $row['Sources']; ?></td>
            <td><?php echo $row['Relation']; ?></td>
            <td><?php echo $row['Subject']; ?></td>
            <td><?php echo $row['Rights']; ?></td>
            <td><?php echo $row['Type']; ?></td>
            <td><?php echo $row['Coverage']; ?></td>
            <td><?php echo $row['Format']; ?></td>
            <td><?php echo $row['Keywords']; ?></td>
            <td><?php echo $row['Summary']; ?></td>
            <td><?php echo $row['Requester_Id']; ?></td>
            <td>
                <form method='post' action='deletedissertations.php'>
                    <input type='hidden' value="<?php echo $row['Title']; ?>" name='id'>
                    <input type='submit' name='del' value='Delete'>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<form action="dissertations.php">
    <button type="submit">Go to Dissertations Page</button>
</form>

</body>
</html>
