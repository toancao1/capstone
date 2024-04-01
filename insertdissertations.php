<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insert Dissertations</title>
  <link rel="stylesheet" href="dissertations.css">
  <script src="index.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
    <h1>Dissertations Page</h1>
    <img src="images/Ottawa Academic University's Library Management System Logo.png" alt="logo" width="400" height="100">
</div>
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
        <a href="dissertations.php">
          <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>-->       
          <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
          </a>
       <!--https://icons8.com/icon/M9GRuG4p90hG/thesis" (Thesis)-->
       <a href="index.html"><img src="images/dissertations.png" alt="dissertations icon" width="100" height="80"></a>
      </nav>
  </div>
  <?php
// Server connection
$conn = mysqli_connect("localhost", "root", "", "library_db");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$title = $_REQUEST['title'];
$creators = isset($_REQUEST['creators']) ? $_REQUEST['creators'] : '';
$identifier = $_REQUEST['identifier'];
$publication_date = $_REQUEST['publication_date'];
$publisher = $_REQUEST['publisher'];
$description = $_REQUEST['description'];
$language = $_REQUEST['language'];
$contributor = isset($_REQUEST['contributor']) ? $_REQUEST['contributor'] : '';
$sources = $_REQUEST['sources'];
$relation = $_REQUEST['relation'];
$subject = $_REQUEST['subject'];
$rights = $_REQUEST['rights'];
$type = $_REQUEST['type'];
$coverage = $_REQUEST['coverage'];
$format = $_REQUEST['format'];
$keywords = $_REQUEST['keywords'];
$summary = $_REQUEST['summary'];
$requester_id = $_REQUEST['requester_id'];

// Performing insert query using prepared statement
$sql = "INSERT INTO dissertations (title, creators, identifier, publication_date, publisher, description, language, contributor, sources, relation, subject, rights, type, coverage, format, keywords, summary, requester_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = mysqli_prepare($conn, $sql);

// Check if statement preparation succeeded
if ($stmt === false) {
    echo "ERROR: Unable to prepare statement. " . mysqli_error($conn);
} else {
    // Bind parameters
    // https://www.php.net/manual/en/mysqli-stmt.bind-param.php
    // https://www.tutorialspoint.com/php/php_function_mysqli_stmt_bind_param.htm
    // https://alphacodingskills.com/php/notes/php-mysqli-stmt-bind-param.php
    // https://docs.w3cub.com/php/mysqli-stmt.bind-param.html
    // https://stackoverflow.com/questions/31979794/php-fatal-error-call-to-a-member-function-bind-param
    mysqli_stmt_bind_param($stmt, "ssssssssssssssssss", $title, $creators, $identifier, $publication_date, $publisher, $description, $language, $contributor, $sources, $relation, $subject, $rights, $type, $coverage, $format, $keywords, $summary, $requester_id);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "<h3>Data stored in the database successfully. Please browse your localhost phpMyAdmin to view the updated data.</h3>";
        // Displaying inserted data for confirmation
        // https://www.w3schools.com/php/php_string_concatenate.asp
        // https://www.w3schools.com/php/func_string_htmlspecialchars.asp
        echo "Title: " . htmlspecialchars($title) . "<br>";
        echo "Creators: " . htmlspecialchars($creators) . "<br>";
        echo "Identifier: " . htmlspecialchars($identifier) . "<br>";
        echo "Publication Date: " . htmlspecialchars($publication_date) . "<br>";
        echo "Publisher: " . htmlspecialchars($publisher) . "<br>";
        echo "Description: " . htmlspecialchars($description) . "<br>";
        echo "Language: " . htmlspecialchars($language) . "<br>";
        echo "Contributor: " . htmlspecialchars($contributor) . "<br>";
        echo "Sources: " . htmlspecialchars($sources) . "<br>";
        echo "Relation: " . htmlspecialchars($relation) . "<br>";
        echo "Subject: " . htmlspecialchars($subject) . "<br>";
        echo "Rights: " . htmlspecialchars($rights) . "<br>";
        echo "Type: " . htmlspecialchars($type) . "<br>";
        echo "Coverage: " . htmlspecialchars($coverage) . "<br>";
        echo "Format: " . htmlspecialchars($format) . "<br>";
        echo "Keywords: " . htmlspecialchars($keywords) . "<br>";
        echo "Summary: " . htmlspecialchars($summary) . "<br>";
        echo "Requester ID: " . htmlspecialchars($requester_id) . "<br>";
    } else {
        echo "ERROR: Failed to execute statement. " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($conn);
?>


<form action="modifydissertations.php" method="get">
<button type="submit" onclick="window.location.href='./modifydissertations.php'">Modify DIssertations Page</button>
</form>
<footer>
  &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>