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
    } else {
        $error = "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete books</title>
    <link rel="stylesheet" type="text/css" href="deletebooks.css">
</head>
<body>
<h1>Delete books</h1>
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
        <span class="dropbtn" onclick="toggleDropdown('searchDropdown')">Catalog</span>
        <div class="dropdown-content" id="searchDropdown">
          <a href="books.php" onclick="redirectTo('books.php')">Books</a>
          <a href="journals.php" onclick="redirectTo('journals.php')">Journals</a>
          <a href="images.php" onclick="redirectTo('images.php')">images</a>
          <a href="videos.php" onclick="redirectTo('videos.php')">Videos</a>
          <a href="dissertations.php" onclick="redirectTo('dissertations.php')">Dissertations</a>
        </div>
      </div>
      <a href="index.html">
        <img src="images/search-icon.svg" alt="search icon">
      </a>
      <input type="text" id="searchInput" placeholder="Search...">
      <ul id="searchResults"></ul>
    </nav>
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
                        <form method='post' action='deletebooks.php'>
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
    <button type="submit">Go to books.php</button>
</form>

</body>
</html>
