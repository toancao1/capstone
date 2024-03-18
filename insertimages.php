<!DOCTYPE html>
<html>
<head>
    <title>Insert Images Page</title>
</head>
<body>
        <?php 
        // Server connection
        // Adapted from source: https://www.devbabu.com/how-to-make-php-mysql-login-registration-system/
        $conn = mysqli_connect("localhost", "root", "", "library_db");
        
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
$title = $_REQUEST["title"];
$creators = isset($_REQUEST["creators"]) ? $_REQUEST["creators"] : "";
$description = $_REQUEST["description"];
$location = $_REQUEST["location"];
$publication_date = $_REQUEST["publication_date"];
$format = $_REQUEST["format"];
$language = $_REQUEST["language"];
$subject = $_REQUEST["subject"];
$rights = $_REQUEST["rights"];
$type = $_REQUEST["type"];
$keywords = $_REQUEST["keywords"];
$summary = $_REQUEST["summary"];
$requester_id = $_REQUEST["requester_id"];
        
        $sql = "INSERT INTO images (title, creators, description, location, publication_date, format, language, subject, rights, type, keywords, summary, requester_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt === false) {
            echo "ERROR: Unable to prepare statement. " . mysqli_error($conn);
        } else {
            mysqli_stmt_bind_param($stmt, "sssssssssssss", $title, $creatorss, $description, $location, $publication_date, $format, $language, $subject, $rights, $type, $keywords, $summary, $requester_id);
        
            if (mysqli_stmt_execute($stmt)) {
                echo "<h3>Data stored in the database successfully. Please browse your localhost php my admin to view the updated data.</h3>";
                echo nl2br("\n$title\n $creators\n $description\n $location\n $publication_date\n $format\n $language\n $subject\n $rights\n $type\n $keywords\n $summary\n$requester_id\n");
            } else {
                echo "ERROR: Unable to execute statement. " . mysqli_error($conn);
            }
        
            mysqli_stmt_close($stmt);
        }
        
        mysqli_close($conn);
        ?>
      
      <form action="deleteimages.php" method="get">
                    <input type="submit" value="Go to Delete Page">
            </form>
        </body>
        </html>
