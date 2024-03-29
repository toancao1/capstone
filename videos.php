<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="videos.css">
  <script src="index.js"></script>
  <title>Catalogue</title>
</head>
<body>
  <h1>Videos Page</h1>
  <div class="nav">
    <nav>
      <a href="#" onclick="redirectTo('index.php')">Home</a>
      <a href="#" onclick="redirectTo('about.php')">About</a>
      <a href="#" onclick="redirectTo('contact.php')">Contact</a>
      <a href="#" onclick="redirectTo('login.php')">Login</a>
      <a href="#" onclick="redirectTo('registration.php')">Register</a>
      <div class="dropdown">
        <span class="dropbtn" onclick="toggleDropdown()">Search Catalog</span>
        <div class="dropdown-content">
          <a href="#" onclick="redirectTo('books.php', event)">Books</a>
          <a href="#" onclick="redirectTo('journals.php', event)">Journals</a>
          <a href="#" onclick="redirectTo('images.php', event)">images</a>
          <a href="#" onclick="redirectTo('videos.php', event)">Videos</a>
          <a href="#" onclick="redirectTo('dissertations.php', event)">Dissertations</a>
        </div>
      </div>
      <a href="index.html">
        <img src="images/Picture5.svg" alt="logo">
      </a>
    </nav>
  </div>

  <form method="POST" action="insertvideos.php">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title">
    <label for="directors">Directors:</label>
    <input type="text" id="directors" name="directors">
    <label for="products">Producers:</label>
    <input type="text" id="producers" name="producers">
    <label for="actors">Actors:</label>
    <input type="text" id="actors" name="actors">
    <label for="release_date">Release date:</label>
    <input type="text" id="release_date" name="release_date">
    <label for="identifier">Identifier:</label>
    <input type="text" id="identifier" name="identifier">
    <label for="description">Description:</label>
    <input type="text" id="description" name="description">
    <label for="language">Language:</label>
    <select id="language" name="language">
      <option value="Select">Select</option>
      <option value="English">English</option>
      <option value="French">French</option>
      <option value="Other">Other</option>
    </select>
    <label for="creator">Contributors</label>
    <input type="text" id="contributor" name="contributor">
    <label for="genre">Genre:</label>
    <input type="text" id="genre" name="genre">
    <label for="rights">Rights:</label>
    <input type="text" id="rights" name="rights">
    <label for="rights">Type:</label>
    <input type="text" id="type" name="type">
    <label for="format">Format:</label>
    <input type="text" id="format" name="format">
    <label for="keywords">Keywords:</label>
    <input type="text" id="keywords" name="keywords">
    <label for="summary">Summary:</label>
    <input type="text" id="summary" name="summary">
    <label for="requester_id">requester_id:</label>
    <input type="text" id="requester_id" name="requester_id">
    <button type="submit">Submit</button>
  </form>

  <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $title = $_POST['title'];
     $directors = $_POST['directors'];
     $producers = $_POST['producers'];
     $actors = $_POST['actors'];
     $release_date = $_POST['release_date'];
     $identifier = $_POST['identifier'];
     $description = $_POST['description'];
     $language = $_POST['language'];
     $contributors = isset($_POST['contributor']) ? $_POST['contributor'] : ''; // Corrected key name
     $genre = $_POST['genre'];
     $rights = $_POST['rights'];
     $type = $_POST['type'];
     $format = $_POST['format'];
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