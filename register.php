<?php
session_start();
// https://stackoverflow.com/questions/44240992/php-html-form-validation
$usernameErr = $passwordErr = "";

if (isset($_SESSION['logged_user_id'])) {
    header('Location: logout.php');
    exit;
}

require_once __DIR__ . "/database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once __DIR__ . "/on_register.php";
    
    if (
        isset($_POST["username"]) &&
        isset($_POST["password"])
    ) {
        $result = on_register($conn);
    }
}

// If the user is registered successfully, don't show the post values.
$show = isset($result["form_reset"]) ? true : false;

function post_value($field)
{
    global $show;
    if (isset($_POST[$field]) && !$show) {
        echo 'value="' . trim(htmlspecialchars($_POST[$field])) . '"';
        return;
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
    <link rel="stylesheet" href="register.css">
    <script src="index.js"></script>
    <title>Register Page</title>
</head>
<body>
<div class="header">
    <h1>Register Page</h1>
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
      <a href="register.php">
      <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="books icon"width="100" height="80">-->
      <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
    </a>
         <!-- Source of image: <a href="https://www.flaticon.com/free-icons/home-button" title="home button icons">Home button icons created by Freepik - Flaticon</a>-->
         <a href="index.html"><img src="images/Home.png" alt="home icon" width="100" height="80"></a>
         </nav>
         </nav>
</div>
    </nav>
    <div class="container">
    <!-- https://www.w3schools.com/php/php_forms.asp-->
<?php
if (isset($_SESSION['logged_user_id'])) {
    echo '<p>Already a member? <a href="login.php">Log in</a></p>';
} else {
}
    // Display error message if registration fails
    if (isset($error_msg)) {
        echo '<p class="msg error">' . $error_msg . '</p>';
    }
?>
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
    <button type="submit" onclick="window.location.href='./login.php'"><strong>Register</strong></button>
    <p>Already a member?</p>
        <br><br><button type="submit" onclick="window.location.href='./login.php'"><strong>Login</strong></button>
<br>
</form>
</div>
        <!--https://www.phptutorial.net/php-tutorial/php-registration-form/-->
<footer>
    &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>
