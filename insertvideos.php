<!DOCTYPE html>
<html>
<head>
    <title>Insert Videos page</title>
</head>
<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Server connection
    $conn = mysqli_connect("localhost", "root", "", "library_db");

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Taking all values from the form data (input)
    $title = $_REQUEST['title'];
    $directors = $_REQUEST['directors'];
    $producers = $_REQUEST['producers'];
    $actors = $_REQUEST['actors'];
    $release_date = $_REQUEST['release_date'];
    $identifier = $_REQUEST['identifier'];
    $description = $_REQUEST['description'];
    $language = $_REQUEST['language'];
    $contributors = isset($_REQUEST['contributors']) ? $_REQUEST['contributors'] : ''; // Provide default value if not set
    $genre = $_REQUEST['genre'];
    $rights = $_REQUEST['rights'];
    $type = $_REQUEST['type'];
    $format = $_REQUEST['format'];
    $keywords = $_REQUEST['keywords'];
    $summary = $_REQUEST['summary'];
    $requester_id = $_REQUEST['requester_id'];



    $sql = "INSERT INTO videos (title, directors, producers, actors, release_date, identifier, description, language, contributors, genre, rights, type, format, keywords, summary, requester_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        echo "ERROR: Unable to prepare statement. " . mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $title, $directors, $producers, $actors, $release_date, $identifier, $description, $language, $contributors, $genre, $rights, $type, $format, $keywords, $summary, $requester_id);

        if (mysqli_stmt_execute($stmt)) {
            echo "<h3>Data stored in the database successfully. Please browse your localhost php my admin to view the updated data.</h3>";
            echo nl2br("\n$title\n $directors\n $producers\n $actors\n $release_date\n $identifier\n $description\n $language\n $contributors\n $genre\n $rights\n $type\n $format\n $keywords\n $summary\n$requester_id\n");
        } else {
            echo "ERROR: Unable to execute statement. " . mysqli_error($conn);
        }
    
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($conn);
}
    ?>
 
                   <form action="deletevideos.php" method="get">
                    <input type="submit" value="Go to Delete Videos Page">
            </form>
        </body>
        </html>