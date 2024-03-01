<?php
require 'database.php';

function sanitize($input) {
    return htmlspecialchars($input);
}

$error = "";

if(isset($_POST['del'])) {
    $id = sanitize(trim($_POST['id']));
    $sql_del = "DELETE FROM journals WHERE Title = ?";
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
    <title>Delete Journals</title>
    <link rel="stylesheet" type="text/css" href="deletejournals.css">
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
            <th>Creator</th>
            <th>Identifier</th>
            <th>doi</th>
            <th>Volume Number</th>
            <th>Issue Number</th>
            <th>Page Range</th>
            <th>Description</th>
            <th>Publication Date</th>
            <th>Type</th>
            <th>Keywords</th>
            <th>Summary</th>
            <th>Requester ID</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $sql = "SELECT * FROM journals";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['Title']; ?></td>
            <td><?php echo $row['Creator']; ?></td>
            <td><?php echo $row['Identifier']; ?></td>
            <td><?php echo $row['doi']; ?></td>
            <td><?php echo $row['Volume_number']; ?></td>
            <td><?php echo $row['Issue_number']; ?></td>
            <td><?php echo $row['Page_range']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <td><?php echo $row['Publication_date']; ?></td>
            <td><?php echo $row['Type']; ?></td>
            <td><?php echo $row['Keywords']; ?></td>
            <td><?php echo $row['Summary']; ?></td>
            <td><?php echo $row['Requester_Id']; ?></td>
            <td>
                <form method='post' action='deletejournals.php'>
                    <input type='hidden' value="<?php echo $row['Title']; ?>" name='id'>
                    <input type='submit' name='del' value='Delete'>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<form action="journals.php">
    <button type="submit">Go to Journals Page</button>
</form>

</body>
</html>
