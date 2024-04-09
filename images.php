<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Images</title>
  <link rel="stylesheet" href="contact.css">
  <script src="index.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
    <h1>Images Page</h1>
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
        <form method="post">
          <select name="fields">
            <option value="">All Fields</option>
            <option value="title">Title</option>
            <option value="author">Author</option>
            <option value="creator">Creator</option>
            <option value="publication_date">Publication Date</option>
            <option value="subject">Subject</option>
          </select>
        </form>
      <input type="text" id="searchInput" placeholder="Search...">
        <ul id="searchResults"></ul>
        <a href="images.php">
          <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="books icon"width="100" height="80">-->
          <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
          </a>
          <!--<a href="https://www.flaticon.com/free-icons/picture" title="picture icons">Picture icons created by Freepik - Flaticon</a>-->
          <a href="index.html"><img src="images/image.png" alt="image icon" width="100" height="80"></a>
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
    <button type="submit"><strong>Submit</strong></button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* Retrieve form data , https://www.w3schools.com/tags/ref_httpmethods.asp*/
      
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
