<!DOCTYPE html>
<html>
<head>
    <title>Insert Journals page</title>
</head>
<body>
        <?php // Server connection
		// Adapted from source : https://www.devbabu.com/how-to-make-php-mysql-login-registration-system/
        $conn = mysqli_connect("localhost", "root", "", "library_db");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Taking all values from the form data (input)
        $title = $_POST['title'];
   $creator = $_POST['creator'];
   $identifier = $_POST['identifier'];
   $DOI = $_POST['DOI'];
   $volume_number = $_POST['volume_number'];
   $issue_number = $_POST['issue_number'];
   $page_range = $_POST['page_range'];
   $description = $_POST['description'];
   $publication_date = $_POST['publication_date'];
   $type = $_POST['type'];
   $keywords = $_POST['keywords'];
   $summary = $_POST['summary'];
   $requester_id = $_POST['requester_id'];

        // Performing insert query execution using prepared statement
        $sql = "INSERT INTO journals (title, creator, identifier, doi, volume_number, issue_number, page_range, description, publication_date, type, keywords, summary, requester_id)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        // Prepare the statement
        $stmt = mysqli_prepare($conn, $sql);

        // Check if statement preparation succeeded
        if ($stmt === false) {
            echo "ERROR: Unable to prepare statement. " . mysqli_error($conn);
        } else {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "sssssssssssss", $title, $creator, $identifier, $doi, $volume_number, $issue_number, $page_range, $description, $publication_date, $type, $keywords, $summary, $requester_id);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                echo "<h3>Data stored in the database successfully. Please browse your localhost php my admin to view the updated data.</h3>";
                echo nl2br("\n$title\n $creator\n $identifier\n $doi\n $volume_number\n $issue_number\n $page_range\n $description\n $publication_date\n $type\n $keywords\n $summary\n$requester_id\n");
            } else {
                echo "ERROR: Hush! Sorry. " . mysqli_error($conn);
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }

       
        // Close connection
        mysqli_close($conn);
        ?>
                   <form action="deletejournals.php" method="get">
                    <input type="submit" value="Go to Delete Page">
            </form>
        </body>
        </html>
