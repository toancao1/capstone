<?php
// Adapted from: https://www.sourcecodester.com/php/12469/library-management-system-using-php-mysql.html
require 'database.php';

function sanitize($input) {
    return htmlspecialchars($input);
}

$error = "";

if(isset($_POST['del'])) {
    $id = sanitize(trim($_POST['id']));
    $sql_del = "DELETE FROM books WHERE Title = ?";
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
    <title>Delete books</title>
    <link rel="stylesheet" type="text/css" href="deletebooks.css">
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
                    <th>Publication Date</th>
                    <th>Description</th>
                    <th>Publisher</th>
                    <th>Language</th>
                    <th>Contributors</th>
                    <th>Subject</th>
                    <th>Rights</th>
                    <th>Format</th>
                    <th>Keywords</th>
                    <th>Summary</th>
                    <th>Requester ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql = "SELECT * FROM books";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['Title']; ?></td>
                    <td><?php echo $row['Creators']; ?></td>
                    <td><?php echo $row['Identifier']; ?></td>
                    <td><?php echo $row['Publication_date']; ?></td>
                    <td><?php echo $row['Description']; ?></td>
                    <td><?php echo $row['Publisher']; ?></td>
                    <td><?php echo $row['Language']; ?></td>
                    <td><?php echo $row['Contributors']; ?></td>
                    <td><?php echo $row['Subject']; ?></td>
                    <td><?php echo $row['Rights']; ?></td>
                    <td><?php echo $row['Format']; ?></td>
                    <td><?php echo $row['Keywords']; ?></td>
                    <td><?php echo $row['Summary']; ?></td>
                    <td><?php echo $row['Requester_Id']; ?></td>
                    <td>
                        <form method='post' action='deletebooks.php'>
                            <input type='hidden' value="<?php echo $row['Title']; ?>" name='id'>
                            <input type='submit' name='del' value='Delete'>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<form action="books.php">
    <button type="submit">Go to books.php</button>
</form>

</body>
</html>
