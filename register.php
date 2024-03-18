<?php
session_start();

if (isset($_SESSION['logged_user_id'])) {
    header('Location: logout.php');
    exit;
}

require_once __DIR__ . "/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once __DIR__ . "/on_register.php";
    
    if (
        isset($_POST["username"]) &&
        isset($_POST["email"]) &&
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
    <title>Register</title>
</head>

<body>
<div class="header">
    <h1>Register Page</h1>
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
      <!--<a target="_blank" href="https://icons8.com/icon/3/add-user-male">Register</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>-->
      <img src="images/search-icon.svg" alt="search icon">
      </a>
      <input type="text" id="searchInput" placeholder="Search...">
      <ul id="searchResults"></ul>
    </nav>
  </div>
    <div class="container">
        <form action="" method="POST" id="theForm">
            <label for="user_name">Username: <span></span></label>
            <input type="text" class="input" name="username" <?php post_value("username"); ?>>

            <label for="user_email">Email: <span></span></label>
            <input type="email" class="input" name="email" <?php post_value("email"); ?>>

            <label for="user_pass">Password: <span></span></label>
            <input type="password" class="input" name="password">

            <?php if (isset($result["msg"])) { ?>
                <p class="msg<?php if ($result["ok"] === 0) echo " error"; ?>">
                    <?php echo $result["msg"]; ?>
                </p>
            <?php } ?>
            <button type="button" onclick="window.location.href='./login.php'">Login</button>
        </form>
    </div>
    <?php
    // JS code to show errors
    if (isset($result["field_error"])) { ?>
        <script>
            let field_error = <?php echo json_encode($result["field_error"]); ?>;
            let el = null;
            let msg_el = null;
            for (let i in field_error) {
                el = document.querySelector(`input[name="${i}"]`);
                el.classList.add("error");
                msg_el = document.querySelector(`label[for="${el.getAttribute("id")}"] span`);
                msg_el.innerText = field_error[i];
            }
        </script>
    <?php } 
    ?>
      <footer>
    &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>
