<?php
// Adapted from: https://www.sourcecodester.com/php/12469/library-management-system-using-php-mysql.html
require 'database.php';

function sanitize($input) {
    return htmlspecialchars($input);
}

$error = "";

if(isset($_POST['del'])) {
    $id = sanitize(trim($_POST['id']));
    $sql_del = "DELETE FROM books WHERE Title = ?";
    $stmt = $conn->prepare($sql_del);
    $stmt->bind_param("s", $id);
    
    if($stmt->execute()) {
        // Deletion successful, no need for a success message here
        // https://github.com/ywxbear/PHP-Bookstore-Website-Example
    } else {
        $error = "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Modify Books</title>
    <link rel="stylesheet" type="text/css" href="books.css">
</head>
<body>
<div class="header">
    <h1>Modify Books Page</h1>
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
        <a href="index.html">
          <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="books icon"width="100" height="80">-->
          <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
          </a>
          <!-- Source of image: <a href="<a href="https://www.flaticon.com/free-icons/book" title="book icons">Book icons created by Freepik - Flaticon</a>-->
          <a href="index.html"><img src="images/open-book.png" alt="book icon" width="100" height="80"></a>
    </nav>
</div>
        <?php if(isset($error) && $error !== "") { ?>
            <div class="alert">
                <strong><?php echo $error; ?></strong>
            </div>
        <?php } ?>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Creators</th>
                    <th>Identifier</th>
                    <th>Publication Date</th>
                    <th>Description</th>
                    <th>Publisher</th>
                    <th>Language</th>
                    <th>Contributors</th>
                    <th>Subject</th>
                    <th>Rights</th>
                    <th>Format</th>
                    <th>Keywords</th>
                    <th>Summary</th>
                    <th>Requester ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql = "SELECT * FROM books";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['Title']; ?></td>
                    <td><?php echo $row['Creators']; ?></td>
                    <td><?php echo $row['Identifier']; ?></td>
                    <td><?php echo $row['Publication_date']; ?></td>
                    <td><?php echo $row['Description']; ?></td>
                    <td><?php echo $row['Publisher']; ?></td>
                    <td><?php echo $row['Language']; ?></td>
                    <td><?php echo $row['Contributors']; ?></td>
                    <td><?php echo $row['Subject']; ?></td>
                    <td><?php echo $row['Rights']; ?></td>
                    <td><?php echo $row['Format']; ?></td>
                    <td><?php echo $row['Keywords']; ?></td>
                    <td><?php echo $row['Summary']; ?></td>
                    <td><?php echo $row['Requester_Id']; ?></td>
                    <td>
                        <form method='post' action='modifybooks.php'>
                            <input type='hidden' value="<?php echo $row['Title']; ?>" name='id'>
                            <input type='submit' name='del' value='Delete'>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<form action="books.php">
    <button type="submit">Books</button>
</form>
<footer>
  &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>
