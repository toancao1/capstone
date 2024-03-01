<?php
session_start();
// Adapted from: https://www.devbabu.com/how-to-make-php-mysql-login-registration-system/ 
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate the login credentials
    // Here you would typically include your login validation logic
    // For demonstration purposes, let's assume the login is successful
    $login_successful = true;

    if ($login_successful) {
        // Set a session variable to indicate the user is logged in
        $_SESSION['logged_user_id'] = 1; // Assuming the user ID is 1 for demonstration
        
        // Redirect to the logged-in page
        header("Location: logged_in.php");
        exit;
    } else {
        // If login fails, you can display an error message
        $error_msg = "Invalid email or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css">
    <script src="index.js"></script>
    <h1>Login</h1>
    <title>Login Page</title>
</head>
<body>
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
      <img src="images/search-icon.svg" alt="search icon">
      </a>
      <input type="text" id="searchInput" placeholder="Search...">
      <ul id="searchResults"></ul>
    </nav>
  </div>
    <div class="container">
        <form method="POST">
            <label for="user_Email">Email: <span></span></label>
            <input type="email" class="input" name="Email" required>

            <label for="user_pass">Password: <span></span></label>
            <input type="password" class="input" name="password" required>
            
            <!-- Button to submit the form -->
            <button type="submit" class="continue-button">Login</button>
            
        </form>
        
        <?php
        // Display error message if login fails
        if (isset($error_msg)) {
            echo '<p class="msg error">' . $error_msg . '</p>';
        }
        ?>
    </div>
</body>
</html>
