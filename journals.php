<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Journals</title>
  <link rel="stylesheet" href="journals.css">
  <script src="index.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
    <h1>Journals Page</h1>
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
        <a href="journals.php">
          <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="books icon"width="100" height="80">-->
          <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
          </a>
          <!-- Source of image: <a href="<a href="<a href="https://www.flaticon.com/free-icons/article" title="article icons">Article icons created by Prosymbols Premium - Flaticon</a>-->
          <a href="index.html"><img src="images/journal.png" alt="journals icon" width="100" height="80"></a>
    </nav>
</div>
  <form action="insertjournals.php" method="POST">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title">
    <label for="creator">Creator:</label>
    <input type="text" id="Creator" name="Creator">
    <label for="identifier">Identifier (ISSN):</label>
    <input type="text" id="identifier" name="identifier">
    <label for="DOI">DOI:</label>
    <input type="text" id="DOI" name="DOI">
    <label for="volume_number">Volume number:</label>
    <input type="number" id="volume_number" name="volume_number" placeholder="positive number">
    <label for="issue_number">Issue number:</label>
    <input type="number" id="issue_number" name="issue_number" placeholder="positive number">
    <label for="page_range">Page range:</label>
    <input type="text" id="page_range" name="page_range">
    <label for="type">Type:</label>
    <input type="text" id="type" name="type">
    <label for="description">Description:</label>
    <input type="text" id="description" name="description">
    <label for="publication_date">Publication Date:</label>
    <input type="date" id="publication_date" name="publication_date">
    <label for="keywords">Keywords:</label>
    <input type="text" id="keywords" name="keywords">
    <label for="summary">Summary:</label>
    <input type="text" id="summary" name="summary">
    <label for="requester_id">Requester ID:</label>
    <input type="text" id="requester_id" name="requester_id">
    <button type="submit"><strong>Submit</strong></button>
  </form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
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
}
?>
<footer>
  &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>
