<!DOCTYPE html>
<html>
<head>
    <title>About Page</title>
    <link rel="stylesheet" href="about.css">
    <script src="index.js"></script>
</head>
<body>
  <div class="header">
    <h1>About Us Page</h1>
    <img src="images/Ottawa Academic University's Library Management System Logo.png" alt="logo" width="600" height="150">
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
        <span class="dropbtn" onclick="toggleDropdown('searchDropdown')">Catalog</span>
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
        <!-- Source of image: https://www.freepik.com/icon/group_12099924#fromView=keyword&page=1&position=8&uuid=afe16b11-e65a-4f21-a51f-5c6d41b24121-->
      <a href="about.php"><img src="images/about.png" alt="about us icon" width="100" height="80"></a>
      </nav>
  </div>
  <p>This is our university library website LMS for metadata. The Ottawa Academic University's Library Management System is created by students, for students. Our LMS is designed for use in academic libraries, suing metadata standards such as Dublin Core and MARC21. With an emphasis on efficiency and simplicity, our project aims to assist students by making it easier for them to access library resources, such as books, journals, images and videos. This is further facilitated b an easy-to-use interface, that makes the lives of both students and librarians much easier.
</p>
Our system consists of two parts, those being the front end website and the back end database. Students can make use of the straight forward design of the website to find the resources they need, while libraries can use it to make any necessary changes to the database. The back end has dedicated tables for different library materials, along with a table for storing login information.
</p>
With the age of information in full swing, proper access to resources has never been more important for students and librarians alike. The Ottawa Academic University's LMS seeks to make this confusing world of information easier to navigate, and to turn a large catalogue of materials into a veritable asset for any student that needs it.
</p>
The website and database are both demonstration products, and are not finalized products that are suitable for sale and commercial use. </p>
</p>
<footer>
  &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>
