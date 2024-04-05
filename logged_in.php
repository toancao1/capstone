<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_user_id'])) {
    header("Location: login.php");
    exit;
}

// Check if login result is set
if (isset($_SESSION['login_result'])) {
    $result = $_SESSION['login_result'];

    // Check if login is successful
    if ($result["ok"]) {
        // Redirect to logged_in.php if login is successful
        header("Location: logged_in.php");
        exit;
    } else {
        // Handle unsuccessful login attempt
        $error_msg = "Login failed. Please try again.";
    }
}

$logged_user_id = isset($_SESSION['logged_user_id']) ? $_SESSION['logged_user_id'] : null;

if (isset($_GET['logout'])) {
    session_destroy();
    // Redirect to the login page 
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="header">
        <h1>Welcome</h1>
        <img src="images/Ottawa Academic University's Library Management System Logo.png" alt="logo" width="400" height="100">
    </div>
    <nav>
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
                    <span class="dropbtn" onclick="toggleDropdown('deleteDropdown')">Delete Catalog</span>
                    <div class="dropdown-content" id="deleteDropdown">
                        <a href="deletebooks.php">Delete Books</a>
                        <a href="deletejournals.php">Delete Journals</a>
                        <a href="deleteimages.php">Delete Images</a>
                        <a href="deletevideos.php">Delete Videos</a>
                        <a href="deletedissertations.php">Delete Dissertations</a>
                    </div>
                </div>
            </div>
        </div>
        <input type="text" id="searchInput" placeholder="Search...">
        <ul id="searchResults"></ul>
        <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="books icon"width="100" height="80">-->
        <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
    </a>
         <!-- Source of image: <a href="https://www.flaticon.com/free-icons/home-button" title="home button icons">Home button icons created by Freepik - Flaticon</a>-->
         <a href="index.html"><img src="images/Home.png" alt="home icon" width="100" height="80"></a>
    </nav>
</div>
    <div class="container">
        <p>You have successfully logged in.</p>
        <form action="logout.php" method="get" onsubmit="return confirm('Are you sure you want to logout?')">
            <button type="submit"><strong>Logout</strong></button>
        </form>
    </div>
    <footer>
        &copy; 2024 Ottawa Academic University. All Rights Reserved.
    </footer>
</body>
</html>
