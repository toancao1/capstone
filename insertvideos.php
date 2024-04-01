<!--// Adapted from: https://www.sourcecodester.com/php/12469/library-management-system-using-php-mysql.html
https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php,
https://www.hostinger.com/tutorials/how-to-use-php-to-insert-data-into-mysql-database-->
<!DOCTYPE html>
<html>
<head>
    <title>Insert Videos</title>
    <link rel="stylesheet" type="text/css" href="books.css">
    <script src="index.js"></script>
</head>
<body>
<div class="header">
    <h1>Insert Videos Page</h1>
    <img src="images/Ottawa Academic University's Library Management System Logo.png" alt="logo" width="600" height="150">
</div>
    <nav>
      <a href="index.html">Home</a>
      <a href="about.php" onclick="redirectTo('about.php')">About</a>
      <a href="contact.php" onclick="redirectTo('contact.php')">Contact</a>
      <a href="login.php" onclick="redirectTo('login.php')">Login</a>
      <a href="logout.php" onclick="redirectTo('logout.php')">Logout</a>
      <a href="register.php" onclick="redirectTo('register.php')">Register</a>
      
      <div class="dropdown">
        <span class="dropbtn" onclick="toggleDropdown('searchDropdown')">Catalog</span>
        <div class="dropdown-content" id="searchDropdown">
          <a href="books.php" onclick="redirectTo('books.php')">Books</a>
          <a href="journals.php" onclick="redirectTo('journals.php')">Journals</a>
          <a href="images.php" onclick="redirectTo('images.php')">Images</a>
          <a href="videos.php" onclick="redirectTo('videos.php')">Videos</a>
          <a href="dissertations.php" onclick="redirectTo('dissertations.php')">Dissertations</a>
          
          <div class="dropdown">
            <span class="dropbtn" onclick="toggleDropdown('modifyDropdown')">Modify Catalog</span>
            <div class="dropdown-content" id="modifyDropdown">
              <a href="modifybooks.php" onclick="redirectTo('modifybooks.php')">Modify Books</a>
              <a href="modifyjournals.php" onclick="redirectTo('modifyjournals.php')">Modify Journals</a>
              <a href="modifyimages.php" onclick="redirectTo('modifyimages.php')">Modify Images</a>
              <a href="modifyvideos.php" onclick="redirectTo('modifyvideos.php')">Modify Videos</a>
              <a href="modifydissertations.php" onclick="redirectTo('modifydissertations.php')">Modify Dissertations</a>
            </div>
          </div>
        </div>
      </div>
      <input type="text" id="searchInput" placeholder="Search...">
      <ul id="searchResults"></ul>
      <a href="videos.php">
          <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="books icon"width="100" height="80">-->
          <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
          </a>
        <!-- Source of image: <a href="<a href="<a href="https://www.flaticon.com/free-icons/video" title="video icons">Video icons created by Freepik - Flaticon</a>-->
        <a href="index.html"><img src="images/video.png" alt="video icon" width="100" height="80"></a>
    </nav>
</div>
<?php 
    $conn = mysqli_connect("localhost", "root", "", "library_db");
    
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    // Fetching data from the request
    $title = $_REQUEST["title"];
    $directors = isset($_REQUEST["directors"]) ? $_REQUEST["directors"] : "";
    $producers = isset($_REQUEST["producers"]) ? $_REQUEST["producers"] : "";
    $actors = isset($_REQUEST["actors"]) ? $_REQUEST["actors"] : "";
    $release_date = $_REQUEST["release_date"];
    $identifier = $_REQUEST["identifier"];
    $description = $_REQUEST["description"];
    $language = $_REQUEST["language"];
    $contributors = isset($_REQUEST["contributors"]) ? $_REQUEST["contributors"] : "";
    $genre = $_REQUEST["genre"];
    $rights = $_REQUEST["rights"];
    $type = $_REQUEST["type"];
    $keywords = $_REQUEST["keywords"];
    $format = $_REQUEST["format"];
    $summary = $_REQUEST["summary"];
    $requester_id = $_REQUEST["requester_id"];
    
    // Prepared statement for insertion
    $sql = "INSERT INTO videos (title, directors, producers, actors, release_date, identifier, description, language, contributors, genre, rights, type, keywords, format, summary, requester_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt === false) {
        echo "ERROR: Unable to prepare statement. " . mysqli_error($conn);
    } else {
        // Binding parameters
        mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $title, $directors, $producers, $actors, $release_date, $identifier, $description, $language, $contributors, $genre, $rights, $type, $keywords, $format, $summary, $requester_id);
    
        if (mysqli_stmt_execute($stmt)) {
            echo "<h3>Data stored in the database successfully. Please browse your localhost phpMyAdmin to view the updated data.</h3>";
            // Displaying inserted data
            echo nl2br("\nTitle: $title\n Directors: $directors\n Producers: $producers\n Actors: $actors\n Release Date: $release_date\n Identifier: $identifier\n Description: $description\n Language: $language\n Contributors: $contributors\n Genre: $genre\n Rights: $rights\n Type: $type\n Keywords: $keywords\n Format: $format\n Summary: $summary\n Requester ID: $requester_id\n");
        } else {
            echo "ERROR: Unable to execute statement. " . mysqli_error($conn);
        }
    
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($conn);
?>
  
<form action="modifyvideos.php" method="get">
<button type="submit" onclick="window.location.href='./modifyvideos.php'">Modify Videos</button>
</form>
</body>
</html>






