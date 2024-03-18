<!DOCTYPE html>
<php>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="dissertations.css">
  <script src="index.js"></script>
  <title>Dissertations Page</title>
</head>
<body>
<h1>Dissertations Page</h1>
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
          <a href="deleteimages.php" onclick="redirectTo('deleteimages.php')">Delete Images</a>
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
      <input type="text" id="searchInput" placeholder="Search...">
      <ul id="searchResults"></ul>
       <!--https://icons8.com/icon/M9GRuG4p90hG/thesis" (Thesis)-->
       <a href="dissertations.php"><img src="images/dissertations.png" alt="dissertations icon" width="100" height="80"></a>
      </nav>
  </div>
  <form method="POST" action="insertdissertations.php">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title">
    <label for="creators">Creators:</label>
    <input type="text" id="creators" name="creators">
    <label for="identifier">Identifier:</label>
    <input type="text" id="identifier" name="identifier">
    <label for="publisher">Publisher:</label>
    <input type="text" id="publisher" name="publisher">
    <label for="pub_date">Publication Date:</label>
    <input type="date" id=pub_date name="publication date">
    <label for="description">Description:</label>
    <input type="text" id="description" name="description">
    <label for="language">Language:</label>
    <select id="language" name="language">
      <option value="English">English</option>
      <option value="French">French</option>
      <option value="Other">Other</option>
    </select>
    <label for="contributor">Contributor:</label>
    <input type="text" id="contributor" name="contributor">
    <label for="sources">Sources:</label>
    <input type="text" id="sources" name="sources">
    <label for="relation">Relation:</label>
    <input type="text" id="relation" name="relation">
    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject">
    <label for="description">Description:</label>
    <input type="text" id="description" name="description">
    <label for="rights">Rights:</label>
    <input type="text" id="rights" name="rights">
    <label for="type">Type:</label>
    <input type="text" id="type" name="type">
    <label for="coverage">Coverage:</label>
    <input type="text" id="coverage" name="coverage">
    <label for="format">Format:</label>
    <input type="text" id="format" name="format">
    <label for="keywords">Keywords:</label>
    <input type="text" id="keywords" name="keywords">
    <label for="summary">Summary:</label>
    <input type="text" id="summary" name="summary">
    <label for="requester_id">Requester ID:</label>
    <input type="text" id="requester_id" name="requester_id">
    <button type="submit">Submit</button>
  </form>
  <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_REQUEST['title'];
  $creators = isset($_REQUEST['creators']) ? $_REQUEST['creators'] : '';
  $identifier = $_REQUEST['identifier'];
  $publication_date = $_REQUEST['publication_date'];
  $description = $_REQUEST['description'];
  $publisher = $_REQUEST['publisher'];
  $language = $_REQUEST['language'];
  $contributor = isset($_REQUEST['contributor']) ? $_REQUEST['contributor'] : ''; // Provide default value if not set
  $subject = $_REQUEST['subject'];
  $rights = $_REQUEST['rights'];
  $format = $_REQUEST['format'];
  $keywords = $_REQUEST['keywords'];
  $summary = $_REQUEST['summary'];
  $requester_id = $_REQUEST['requester_id'];
  }
 ?>
 <footer>
  &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>
