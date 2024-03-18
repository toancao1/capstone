<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="images.css">
  <script src="index.js"></script>
  <title>University Catalogue (Images)</title>
</head>

<body>
  <h1>Images Page</h1>
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
      <a href="index.html">
        <img src="Images/search icon.svg" alt="search icon">
      </a>
      <input type="text" id="searchInput" placeholder="Search...">
      <ul id="searchResults"></ul>
    </nav>
  </div>

  <form action="insertimages.php" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title">
    <label for="creators">Creators:</label>
    <input type="text" id="creators" name="creators">
    <label for="description">Description:</label>
    <input type="text" id="description" name="description">
    <label for="location">Location:</label>
    <input type="text" id="location" name="location">
    <label for="pub_date">Publication Date:</label>
    <input type="date" id="pub_date" name="publication_date">
    <label for="format">Format:</label>
    <input type="text" id="format" name="format">
    <label for="language">Language:</label>
    <select id="language" name="language">
      <option value="English">English</option>
      <option value="French">French</option>
      <option value="Other">Other</option>
    </select>
    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject">
    <label for="rights">Rights:</label>
    <input type="text" id="rights" name="rights">
    <label for="type">Type:</label>
    <input type="text" id="type" name="type">
    <label for="keywords">Keywords:</label>
    <input type="text" id="keywords" name="keywords">
    <label for="summary">Summary:</label>
    <input type="text" id="summary" name="summary">
    <label for="requester_id">Requester Id:</label>
    <input type="text" id="requester_id" name="requester_id">
    <button type="submit">Submit</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* Retrieve form data */
    $title = $_POST["title"];
    $creators = $_POST["creators"];
    $description = $_POST["description"];
    $location = $_POST["location"];
    $publication_date = $_POST["publication_date"];
    $format = $_POST["format"];
    $language = $_POST["language"];
    $subject = $_POST["subject"];
    $rights = $_POST["rights"];
    $type = $_POST["type"];
    $keywords = $_POST["keywords"];
    $summary = $_POST["summary"];
    $requester_id = $_POST["requester_id"];
    
  }
?>
</body>

</html>
