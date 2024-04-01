<?php
// Adapted from: https://www.sourcecodester.com/php/12469/library-management-system-using-php-mysql.html
require 'database.php';

function sanitize($input) {
    return htmlspecialchars($input);
}

$error = "";

if(isset($_POST['del'])) {
    $id = sanitize(trim($_POST['id']));
    $sql_del = "DELETE FROM journals WHERE Title = ?";
    $stmt = $conn->prepare($sql_del);
    $stmt->bind_param("s", $id);
    
    if($stmt->execute()) {
        // Deletion successful, no need for a success message here
    } else {
        $error = "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Modify Journals</title>
    <link rel="stylesheet" type="text/css" href="journals.css">
</head>
<body>
<div class="header">
    <h1>Modify Journals Page</h1>
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
          <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="journals icon"width="100" height="80">-->
          <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
          </a>
       <!-- Source of image: <a href="<a href="<a href="https://www.flaticon.com/free-icons/article" title="article icons">Article icons created by Prosymbols Premium - Flaticon</a>-->
       <a href="index.html"><img src="images/journal.png" alt="journals icon" width="100" height="80"></a>
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
                    <th>Creator</th>
                    <th>Identifier</th>
                    <th>doi</th>
                    <th>Volume_number</th>
                    <th>Issue_number</th>
                    <th>Page_range</th>
                    <th>Description</th>
                    <th>Publication_date</th>
                    <th>Type</th>
                    <th>Keywords</th>
                    <th>Summary</th>
                    <th>Requester_Id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql = "SELECT * FROM journals";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['Title']; ?></td>
                    <td><?php echo $row['Creator']; ?></td>
                    <td><?php echo $row['Identifier']; ?></td>
                    <td><?php echo $row['doi']; ?></td>
                    <td><?php echo $row['Volume_number']; ?></td>
                    <td><?php echo $row['Issue_number']; ?></td>
                    <td><?php echo $row['Page_range']; ?></td>
                    <td><?php echo $row['Description']; ?></td>
                    <td><?php echo $row['Publication_date']; ?></td>
                    <td><?php echo $row['Type']; ?></td>
                    <td><?php echo $row['Keywords']; ?></td>
                    <td><?php echo $row['Summary']; ?></td>
                    <td><?php echo $row['Requester_Id']; ?></td>
                    <td>
                        <form method='post' action='modifyjournals.php'>
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

<form action="journals.php">
    <button type="submit">Journals</button>
</form>
<footer>
  &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>
