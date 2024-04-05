<!--Adapted from: https://www.sourcecodester.com/php/12469/library-management-system-using-php-mysql.html
https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php,
https://www.hostinger.com/tutorials/how-to-use-php-to-insert-data-into-mysql-database-->

<!DOCTYPE html>
<html>
<head>
    <title>Insert Journals</title>
    <link rel="stylesheet" type="text/css" href="journals.css">
    <script src="index.js"></script>
</head>
<body>
<div class="header">
    <h1>Insert Journals Page</h1>
    <img src="images/Ottawa Academic University's Library Management System Logo.png" alt="logo" width="400" height="100">
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
    <a href="journals.php">
        <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="journals icon"width="100" height="80">-->
        <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
    </a>
    <!-- Source of image: <a href="<a href="<a href="https://www.flaticon.com/free-icons/article" title="article icons">Article icons created by Prosymbols Premium - Flaticon</a>-->
    <a href="index.html"><img src="images/journal.png" alt="journals icon" width="100" height="80"></a>
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
$Creator = $_REQUEST['Creator']; 
$identifier = $_REQUEST['identifier'];
$DOI = $_REQUEST['DOI'];
$volume_number = $_REQUEST['volume_number'];
$issue_number = $_REQUEST['issue_number'];
$page_range = $_REQUEST['page_range'];
$description = $_REQUEST['description'];
$publication_date = $_REQUEST['publication_date'];
$type = $_REQUEST['type'];
$keywords = $_REQUEST['keywords'];
$summary = $_REQUEST['summary'];
$requester_id = $_REQUEST['requester_id'];

$sql = "INSERT INTO journals (title, Creator, identifier, doi, volume_number, issue_number, page_range, description, publication_date, type, keywords, summary, requester_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {
    echo "ERROR: Unable to prepare statement. " . mysqli_error($conn);
} else {
    mysqli_stmt_bind_param($stmt, "sssssssssssss", $title, $Creator, $identifier, $doi, $volume_number, $issue_number, $page_range, $description, $publication_date, $type, $keywords, $summary, $requester_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<h3>Data stored in the database successfully. Please browse your localhost phpMyAdmin to view the updated data.</h3>";
        echo "Title: " . htmlspecialchars($title) . "<br>";
        echo "Creator: " . htmlspecialchars($Creator) . "<br>";
        echo "Identifier: " . htmlspecialchars($identifier) . "<br>";
        echo "DOI: " . htmlspecialchars($DOI) . "<br>";
        echo "Volume Number: " . htmlspecialchars($volume_number) . "<br>";
        echo "Issue Number: " . htmlspecialchars($issue_number) . "<br>";
        echo "Page Range: " . htmlspecialchars($page_range) . "<br>";
        echo "Description: " . htmlspecialchars($description) . "<br>";
        echo "Publication Date: " . htmlspecialchars($publication_date) . "<br>";
        echo "Type: " . htmlspecialchars($type) . "<br>";
        echo "Keywords: " . htmlspecialchars($keywords) . "<br>";
        echo "Summary: " . htmlspecialchars($summary) . "<br>";
        echo "Requester ID: " . htmlspecialchars($requester_id) . "<br>";
    } else {
        echo "ERROR: Failed to execute statement. " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($conn);
?>

<form action="modifyjournals.php" method="get">
    <button type="submit" onclick="window.location.href='./modifyjournals.php'">Modify Journals</button>
</form>
<footer>
    &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>
