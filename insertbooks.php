<!DOCTYPE html>
<html>
<head>
    <title>Insert Books page</title>
</head>
<body>
    <?php
        // Adapted from source: https://www.devbabu.com/how-to-make-php-mysql-login-registration-system/
        // Server connection
        $conn = mysqli_connect("localhost", "root", "", "library_db");
       
        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
       
        // Taking all values from the form data (input)
        $title = $_REQUEST['title'];
        $creators = $_REQUEST['creators']; // Changed variable name to match later usage
        $identifier = $_REQUEST['identifier'];
        $publication_date = $_REQUEST['publication_date'];
        $description = $_REQUEST['description'];
        $publisher = $_REQUEST['publisher'];
        $language = $_REQUEST['language'];
        $contributorss = isset($_REQUEST['contributors']) ? $_REQUEST['contributors'] : ''; // Provide default value if not set
        $subject = $_REQUEST['subject'];
        $rights = $_REQUEST['rights'];
        $format = $_REQUEST['format'];
        $keywords = $_REQUEST['keywords'];
        $summary = $_REQUEST['summary'];
        $requester_id = $_REQUEST['requester_id'];
       
        // Performing insert query execution using prepared statement
        $sql = "INSERT INTO books (title, creators, identifier, publication_date, description, publisher, language, contributors, subject, rights, format, keywords, summary, requester_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
       
        // Prepare the statement
        $stmt = mysqli_prepare($conn, $sql);
       
        // Check if statement preparation succeeded
        if ($stmt === false) {
            echo "ERROR: Unable to prepare statement. " . mysqli_error($conn);
        } else {
            https://www.tutorialspoint.com/php/php_function_mysqli_stmt_bind_param.htm#:~:text=Definition%20and%20Usage,markers%20of%20a%20prepared%20statement.
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "ssssssssssssss", $title, $creators, $identifier, $publication_date, $description, $publisher, $language, $contributors, $subject, $rights, $format, $keywords, $summary, $requester_id);
       
            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                echo "<h3>Data stored in the database successfully. Please browse your localhost php my admin to view the updated data.</h3>";
                echo htmlspecialchars($title) . "<br>"; // Sanitize and display user inputs
                echo htmlspecialchars($creators) . "<br>";
                echo htmlspecialchars($identifier) . "<br>";
                echo htmlspecialchars($publication_date) . "<br>";
                echo htmlspecialchars($description) . "<br>";
                echo htmlspecialchars($publisher) . "<br>";
                echo htmlspecialchars($language) . "<br>";
                echo htmlspecialchars($contributors) . "<br>";
                echo htmlspecialchars($subject) . "<br>";
                echo htmlspecialchars($rights) . "<br>";
                echo htmlspecialchars($format) . "<br>";
                echo htmlspecialchars($keywords) . "<br>";
                echo htmlspecialchars($summary) . "<br>";
                echo htmlspecialchars($requester_id) . "<br>";
            } else {
                echo "ERROR: Failed to execute statement. " . mysqli_error($conn);
            }
       
            // Close statement
            mysqli_stmt_close($stmt);
        }
       
        // Close connection
        mysqli_close($conn);
        ?>
                   <form action="deletebooks.php" method="get">
                    <input type="submit" value="Go to Delete Page">
            </form>
        </body>
        </html>