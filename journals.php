<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="journals.css">
  <script src="index.js"></script>
  <title>Journals</title>
</head>

<body>
  <h1>Journals</h1>
  <div class="nav">
    <nav>
      <a href="index.html">Home</a>
      <a href="about.php" onclick="redirectTo('about.php')">About</a>
      <a href="contact.php" onclick="redirectTo('contact.php')">Contact</a>
      <a href="login.php" onclick="redirectTo('login.php')">Login</a>
      <a href="logout.php" onclick="redirectTo('logout.php')">Logout</a>
      <a href="register.php" onclick="redirectTo('register.php')">Register</a>
      <div class="dropdown">
        <span class="dropbtn" onclick="toggleDropdown('deleteDropdown')">Delete Catalog</span>
        <div class="dropdown-content" id="deleteDropdown">
          <a href="deletebooks.php" onclick="redirectTo('deletebooks.php')">Delete Books</a>
          <a href="deletejournals.php" onclick="redirectTo('deletejournals.php')">Delete Journals</a>
          <a href="deleteimages.php" onclick="redirectTo('deleteimages.php')">Delete images</a>
          <a href="deletevideos.php" onclick="redirectTo('deletevideos.php')">Delete Videos</a>
          <a href="deletedissertations.php" onclick="redirectTo('deletedissertations.php')">Delete Dissertations</a>
        </div>
      </div>
      <div class="dropdown">
        <span class="dropbtn" onclick="toggleDropdown('searchDropdown')">Search Catalog</span>
        <div class="dropdown-content" id="searchDropdown">
          <a href="books.php" onclick="redirectTo('books.php')">Books</a>
          <a href="journals.php" onclick="redirectTo('journals.php')">Journals</a>
          <a href="images.php" onclick="redirectTo('images.php')">Images</a>
          <a href="videos.php" onclick="redirectTo('videos.php')">Videos</a>
          <a href="dissertations.php" onclick="redirectTo('dissertations.php')">Dissertations</a>
        </div>
      </div>
      <a href="index.html">
        <img src="images/search icon.svg" alt="search icon">
      </a>
      <input type="text" id="searchInput" placeholder="Search...">
      <ul id="searchResults"></ul>
    </nav>
  </div>
  <form action="insertjournals.php" method="POST">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title">
    <label for="creator">Creator:</label>
    <input type="text" id="creator" name="creator">
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
    <button type="submit">Submit</button>
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
