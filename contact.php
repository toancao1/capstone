<?php
// Define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $subjectErr = "";
$firstName = $lastName = $subject = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate First Name
    if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
    } else {
        $firstName = test_input($_POST["firstname"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
            $firstnameErr = "Only letters and white space allowed";
        }
    }

    // Validate Last Name
    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last name is required";
    } else {
        $lastName = test_input($_POST["lastname"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
            $lastnameErr = "Only letters and white space allowed";
        }
    }

// Validate Email
if (empty($_POST["email"])) {
  $emailErr = "Email is required";
} else {
  $email = test_input($_POST["email"]);
  // Check if email address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
  }
}

// Check if the subject field is empty
if (empty($_POST["subject"])) {
  $subjectErr = "Subject is required";
} else {
  $subject = test_input($_POST["subject"]);
}


    // No errors, proceed with form submission
    if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($subjectErr)) {
        // Process your form submission here
        // You can redirect to thank_you.php or handle the submission in this block
        // For simplicity, let's redirect to thank_you.php
        header("Location: thank_you.php");
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Page</title>
    <link rel="stylesheet" href="contact.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="index.js"></script>
    <!--source: https://www.w3schools.com/howto/howto_css_contact_form.asp-->
    <!--Adapted from : https://www.codexworld.com/create-simple-contact-form-php-send-email/-->
</head>
<body>
<div class="header">
    <h1>Contact Us Page</h1>
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
        <!-- Source of image: https://www.freepik.com/icons/contact From FreePik-->
        <a href="contact.php"><img src="images/email.png" alt="email icon" width="100" height="80"></a>
    </nav>
</div>
<p>Contact us if you need help searching for items.</p>

<div class="container">
    <!-- https://www.w3schools.com/php/php_forms.asp-->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First Name">
    <span class="error"><?php echo $firstnameErr; ?></span><br><br>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last Name">
    <span class="error"><?php echo $lastnameErr; ?></span><br><br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Email">
    <span class="error"><?php echo $emailErr; ?></span><br><br>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write your message here..."></textarea><br><br>
    <span class="error"><?php echo $subjectErr; ?></span><br><br>

    <button type="submit" class="button">Submit</button>
</form>
</div>
<footer>
    <div class="icon-bar">    
        <a href="https://www.facebook.com" class="fa fa-facebook"></a>
        <a href="https://www.x.com" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com" class="fa fa-instagram"></a>
    </div>
    &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>
