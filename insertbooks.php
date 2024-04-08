<!--// Adapted from: https://www.sourcecodester.com/php/12469/library-management-system-using-php-mysql.html
https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php,
https://www.hostinger.com/tutorials/how-to-use-php-to-insert-data-into-mysql-database-->
<!DOCTYPE html>
<html>
<head>
    <title>Insert Books</title>
    <link rel="stylesheet" type="text/css" href="books.css">
    <script src="index.js"></script>
</head>
<body>
<div class="header">
    <h1>Insert Books Page</h1>
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
      <select name="keywords">
        <option value="">All Keywords</option>
        <option value="title">Title</option>
        <option value="author">Author</option>
        <option value="creator">Creator</option>
        <option value="publication_date">Publication Date</option>
        <option value="subject">Subject</option>
      </select>
    </form>
      <input type="text" id="searchInput" placeholder="Search...">
      <ul id="searchResults"></ul>
      <a href="books.php">
          <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="books icon"width="100" height="80">-->
          <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
          </a>
          <!-- Source of image: <a href="<a href="https://www.flaticon.com/free-icons/book" title="book icons">Book icons created by Freepik - Flaticon</a>-->
          <a href="index.html"><img src="images/open-book.png" alt="book icon" width="100" height="80"></a>
    </nav>
</div>
    <?php
        // Adapted from source: https://www.devbabu.com/how-to-make-php-mysql-login-registration-system/
        // Server connection
        $conn = mysqli_connect("localhost", "root", "", "library_db");
       
        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
       
        // https://www.w3schools.com/php/php_superglobals_request.asp
        $title = $_REQUEST['title'];
        $creators = $_REQUEST['creators']; 
        $identifier = $_REQUEST['identifier'];
        $publication_date = $_REQUEST['publication_date'];
        $description = $_REQUEST['description'];
        $publisher = $_REQUEST['publisher'];
        $language = $_REQUEST['language'];
        $contributors = isset($_REQUEST['contributors']) ? $_REQUEST['contributors'] : ''; 
        $subject = $_REQUEST['subject'];
        $rights = $_REQUEST['rights'];
        $format = $_REQUEST['format'];
        $keywords = $_REQUEST['keywords'];
        $summary = $_REQUEST['summary'];
        $requester_id = $_REQUEST['requester_id'];
       
        // Performing insert query using prepared statement
        // https://www.w3schools.com/php/php_mysql_prepared_statements.asp
        // https://teamtreehouse.com/community/php-couldnt-connect-to-database
        // https://www.tutorialrepublic.com/php-tutorial/php-mysql-prepared-statements.php
        $sql = "INSERT INTO books (title, creators, identifier, publication_date, description, publisher, language, contributors, subject, rights, format, keywords, summary, requester_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
       
        // Prepare the statement https://www.tutorialspoint.com/php/php_function_mysqli_stmt_bind_param.htm#:~:text=Definition%20and%20Usage,markers%20of%20a%20prepared%20statement.
        $stmt = mysqli_prepare($conn, $sql);
       
        // Check if statement preparation succeeded
        if ($stmt === false) {
            echo "ERROR: Unable to prepare statement. " . mysqli_error($conn);
        } else {
            // Bind parameters
            // https://gist.github.com/andresitodeguzman/16efe629d564b728aab45dc5d83a152e
            // https://www.w3schools.com/php/php_mysql_prepared_statements.asp
            mysqli_stmt_bind_param($stmt, "ssssssssssssss", $title, $creators, $identifier, $publication_date, $description, $publisher, $language, $contributors, $subject, $rights, $format, $keywords, $summary, $requester_id);
       
            // Execute the statement
            // https://www.w3schools.com/php/func_string_htmlspecialchars.asp
            // https://www.tutorialspoint.com/php/php_function_mysqli_stmt_execute.htm
            if (mysqli_stmt_execute($stmt)) {
                echo "<h3>Data stored in the database successfully. Please browse your localhost phpMyAdmin to view the updated data.</h3>";
                echo "Title: " . htmlspecialchars($title) . "<br>";
                echo "Creators: " . htmlspecialchars($creators) . "<br>";
                echo "Identifier: " . htmlspecialchars($identifier) . "<br>";
                echo "Publication_date: " . htmlspecialchars($publication_date) . "<br>";
                echo "Description: " . htmlspecialchars($description) . "<br>";
                echo "Publisher: " . htmlspecialchars($publisher) . "<br>";
                echo "Language: " . htmlspecialchars($language) . "<br>";
                echo "Contributors: " . htmlspecialchars($contributors) . "<br>";
                echo "Subject: " . htmlspecialchars($subject) . "<br>";
                echo "Rights: " . htmlspecialchars($rights) . "<br>";
                echo "Format: " . htmlspecialchars($format) . "<br>";
                echo "Keywords: " . htmlspecialchars($keywords) . "<br>";
                echo "Summary: " . htmlspecialchars($summary) . "<br>";
                echo "Requester ID: " . htmlspecialchars($requester_id) . "<br>";
            } else {
                echo "ERROR: Failed to execute statement. " . mysqli_error($conn);
            }
       
            // Close statement
            // https://www.tutorialspoint.com/php/php_function_mysqli_stmt_close.htm
            mysqli_stmt_close($stmt);
        }
       
        // Close connection
        mysqli_close($conn);
        ?>
                   <form action="modifybooks.php" method="get">
                   <button type="submit" onclick="window.location.href='./modifybooks.php'">Modify Books</button>
            </form>
            <footer>
  &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
        </body>
        </html>