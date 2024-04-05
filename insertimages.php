<!--// Adapted from: https://www.sourcecodester.com/php/12469/library-management-system-using-php-mysql.html
https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php,
https://www.hostinger.com/tutorials/how-to-use-php-to-insert-data-into-mysql-database-->
<!DOCTYPE html>
<html>
<head>
    <title>Insert Images</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <script src="index.js"></script>
</head>
<body>
<div class="header">
    <h1>Insert Images Page</h1>
    <img src="images/Ottawa Academic University's Library Management System Logo.png" alt="logo" width="600" height="150">
</div>
<div class="nav">
  <nav>
    <!--https://www.w3schools.com/howto/howto_js_dropdown.asp-->
        <a href="index.html">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Login</a>
        <a href="logout.php">Logout</a>
        <a href="register.php">Register</a>
        <div class="dropdown">
          <span class="dropbtn" onclick="toggleDropdown('searchDropdown')">Catalog</span>
          <div class="dropdown-content" id="searchDropdown">
            <a href="books.php">Books</a>
            <a href="journals.php">Journals</a>
            <a href="images.php">Images</a>
            <a href="videos.php">Videos</a>
            <a href="dissertations.php">Dissertations</a>
            <div class="dropdown">
              <span class="dropbtn" onclick="toggleDropdown('ModifyDropdown')">Modify Catalog</span>
              <div class="dropdown-content" id="ModifyDropdown">
                <a href="modifybooks.php">Modify Books</a>
                <a href="modifyjournals.php">Modify Journals</a>
                <a href="modifyimages.php">Modify Images</a>
                <a href="modifyvideos.php">Modify Videos</a>
                <a href="modifydissertations.php">Modify Dissertations</a>
              </div>
            </div>
          </div>
        </div>
      <input type="text" id="searchInput" placeholder="Search...">
      <ul id="searchResults"></ul>
      <a href="images.php">
          <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="books icon"width="100" height="80">-->
          <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
          </a>
          <!-- Source of image: <a href="<a href="https://www.flaticon.com/free-icons/book" title="book icons">Book icons created by Freepik - Flaticon</a>-->
          <a href="index.html"><img src="images/image.png" alt="image icon" width="100" height="80"></a>
    </nav>
</div>
        <?php 
    $conn = mysqli_connect("localhost", "root", "", "library_db");
    // Server connection
        // Adapted from source: https://www.devbabu.com/how-to-make-php-mysql-login-registration-system/
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
        mysqli_stmt_bind_param($stmt, "sssssssssssss", $title, $creators, $description, $location, $publication_date, $format, $language, $subject, $rights, $type, $keywords, $summary, $requester_id);
    
        if (mysqli_stmt_execute($stmt)) {
            echo "<h3>Data stored in the database successfully. Please browse your localhost phpMyAdmin to view the updated data.</h3>";
            echo nl2br("\nTitle: $title\n Creators: $creators\n Description: $description\n Location: $location\n Publication Date: $publication_date\n Format: $format\n Language: $language\n Subject: $subject\n Rights: $rights\n Type: $type\n Keywords: $keywords\n Summary: $summary\n Requester ID: $requester_id\n");
        } else {
            echo "ERROR: Unable to execute statement. " . mysqli_error($conn);
        }
    
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($conn);
?>
  
<form action="modifyimages.php" method="get">
<button type="submit" onclick="window.location.href='./modifyimages.php'">Modify Images</button>
</form>
</body>
</html>