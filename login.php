<?php
session_start();

// Redirect if user is already logged in
if (isset($_SESSION['logged_user_id'])) {
    header('Location: index.html');
    exit;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") :
  require_once __DIR__ . "/database.php";
  require_once __DIR__ . "/on_login.php";

  // Check if necessary fields are set
  if (isset($conn) && isset($_POST["username"]) && isset($_POST["password"])) {
      $role = $_POST["role"];
      // Perform login based on role
      $result = on_login($conn, $_POST["username"], $_POST["password"], $role);
  }
endif;

$usernameErr = $passwordErr = "";
// Adapted from: https://www.devbabu.com/how-to-make-php-mysql-login-registration-system/ 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $login_successful = true;

    if ($login_successful) {
        $_SESSION['logged_user_id'] = 1; 
        
        header("Location: logged_in.php");
        exit;
    } else {
        $error_msg = "Invalid username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <script src="index.js"></script>
    <title>Login Page</title>
</head>
<body>
<div class="header">
    <h1>Login Page</h1>
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
      <a href="index.html">
      <a href="login.php">
      <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="books icon"width="100" height="80">-->
      <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
    </a>
         <!-- Source of image: <a href="https://www.flaticon.com/free-icons/home-button" title="home button icons">Home button icons created by Freepik - Flaticon</a>-->
         <a href="index.html"><img src="images/Home.png" alt="home icon" width="100" height="80"></a>
    </nav>
</div>
    </nav>
  </div>
  <div class="container">
    <!-- https://www.w3schools.com/php/php_forms.asp-->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


<label for="username"><strong>Username</strong></label>
<input type="username" id="username" name="username" placeholder="Username">
<span class="error"><?php echo $usernameErr; ?></span><br><br>

    <label for="password"><strong>Password</strong></label>
<input type="password" id="password" name="password" placeholder="Password">
<span class="error"><?php echo $passwordErr; ?></span><br><br>
<label for="role"><strong>Select Role:</strong></label><br>
<select id="role" name="role">
<option value="select">Select</option>
    <option value="student">Student</option>
    <option value="librarian">Librarian</option>
</select><br><br>
    <button type="submit" onclick="window.location.href='./loggedin.php'"><strong>Submit</strong></button>
</form>
</div>
        <?php
        // Display error 
        if (isset($error_msg)) {
            echo '<p class="msg error">' . $error_msg . '</p>';
        }
        ?>
    </div>
    <footer>
  &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>
