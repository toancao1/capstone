<!DOCTYPE html>
<html>
<head>
    <title>Insert Dissertations</title>
    <link rel="stylesheet" type="text/css" href="dissertations.css">
</head>
<body>
  
  <h1>Insert Dissertations</h1>
  <div class="nav">
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
            <span class="dropbtn" onclick="toggleDropdown('deleteDropdown')">Delete Catalog</span>
            <div class="dropdown-content" id="deleteDropdown">
              <a href="deletebooks.php" onclick="redirectTo('deletebooks.php')">Delete Books</a>
              <a href="deletejournals.php" onclick="redirectTo('deletejournals.php')">Delete Journals</a>
              <a href="deleteimages.php" onclick="redirectTo('deleteimages.php')">Delete Images</a>
              <a href="deletevideos.php" onclick="redirectTo('deletevideos.php')">Delete Videos</a>
              <a href="deletedissertations.php" onclick="redirectTo('deletedissertations.php')">Delete Dissertations</a>
            </div>
          </div>
        </div>
      </div>
      <input type="text" id="searchInput" placeholder="Search...">
      <ul id="searchResults"></ul>
      <a href="index.html">
        <img src="images/Home.png" alt="home icon"width="100" height="80">
      </a>
    </nav>
  </div>
<?php
// Server connection
$conn = mysqli_connect("localhost", "root", "", "library_db");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Taking all values from the form data (input)
$title = $_REQUEST['title'];
$creators = isset($_REQUEST['creators']) ? $_REQUEST['creators'] : '';
$identifier = $_REQUEST['identifier'];
$publication_date = $_REQUEST['publication_date'];
$description = $_REQUEST['description'];
$publisher = $_REQUEST['publisher'];
$language = $_REQUEST['language'];
$contributor = $_REQUEST['contributor'];
$subject = $_REQUEST['subject'];
$rights = $_REQUEST['rights'];
$format = $_REQUEST['format'];
$keywords = $_REQUEST['keywords'];
$summary = $_REQUEST['summary'];
$requester_id = $_REQUEST['requester_id'];

// Performing insert query execution using prepared statement
$sql = "INSERT INTO dissertations (title, creators, identifier, publication_date, description, publisher, language, contributor, subject, rights, format, keywords, summary, requester_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = mysqli_prepare($conn, $sql);

// Check if statement preparation succeeded
if ($stmt === false) {
    echo "ERROR: Unable to prepare statement. " . mysqli_error($conn);
} else {
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssssssssssssss", $title, $creators, $identifier, $publication_date, $description, $publisher, $language, $contributor, $subject, $rights, $format, $keywords, $summary, $requester_id);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "<h3>Data stored in the database successfully. Please browse your localhost php my admin to view the updated data.</h3>";
        echo "Title: $title<br>";
        echo "Creator: $creators<br>";
        echo "Identifier: $identifier<br>";
        echo "Publication date: $publication_date<br>";
        echo "Description: $description<br>";
        echo "Publisher: $publisher<br>";
        echo "Language: $language<br>";
        echo "Contributor: $contributor<br>";
        echo "Subject: $subject<br>";
        echo "Rights: $rights<br>";
        echo "Format: $format<br>";
        echo "Keywords: $keywords<br>";
        echo "Summary: $summary<br>";
        echo "Requester ID: $requester_id<br>";
    } else {
        echo "ERROR: Unable to execute statement. " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($conn);
?>

<form action="deletedissertations.php" method="get">
    <input type="submit" value="Go to Delete Page">
</form>

</body>
</html>