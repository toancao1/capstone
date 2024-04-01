<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dissertations</title>
  <link rel="stylesheet" href="contact.css">
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
          <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>-->       
          <a href="dissertations.php"><img src="images/search-icon.png" alt="search icon" width="100" height="80"></a>          
       <!--https://icons8.com/icon/M9GRuG4p90hG/thesis" (Thesis)-->
       <a href="index.html"><img src="images/dissertations.png" alt="dissertations icon" width="100" height="80"></a>
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
    <option value="Select">Select</option>
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
    <button type="submit"><strong>Submit</strong></button>
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
  $contributor = isset($_REQUEST['contributor']) ? $_REQUEST['contributor'] : ''; 
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
