<?php
// https://w3schools.invisionzone.com/topic/57515-need-help-getting-form-data-to-insert-in-table-with-php/
// https://stackoverflow.com/questions/50652300/php-validate-on-same-page-and-then-process-through-different-php
// https://slideplayer.com/slide/8793672/ 
// https://stackoverflow.com/questions/25981194/what-is-the-purpose-of-setting-variables-to-empty-after-defining-them
// https://www.freecodecamp.org/news/creating-html-forms/
// Define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $subjectErr = "";
$firstName = $lastName = $subject = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Validate First Name
if (empty($_POST["firstname"])) {
  $firstnameErr = "First name is required";
} else {
  $firstName = test_input($_POST["firstname"]);
  if (!preg_match("/^[a-zA-Z-']*$/", $firstName)) {
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

if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($subjectErr)) {
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
      <a href="contact.php">
      <!--<a href="https://www.flaticon.com/free-icons/search" title="search icons">Search icons created by Catalin Fertu - Flaticon</a>        <img src="images/open-book.png" alt="books icon"width="100" height="80">-->
      <img src="images/search-icon.png" alt="search icon"width="100" height="80">  
      </a>
       <!-- Source of image: <a href="https://www.flaticon.com/free-icons/email" title="email icons">Email icons created by Freepik - Flaticon</a>-->
       <a href="index.html"><img src="images/email.png" alt="email icon" width="100" height="80"></a>
      </nav>
</div>
<p>Contact us if you need help searching for items.</p>

<div class="container">
    <!-- https://www.w3schools.com/php/php_forms.asp-->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First Name" required>
    <span class="error"><?php echo $firstnameErr; ?></span><br><br>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last Name" required>
    <span class="error"><?php echo $lastnameErr; ?></span><br><br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Email" required>
    <span class="error"><?php echo $emailErr; ?></span><br><br>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write your message here..." required></textarea><br><br>
    <span class="error"><?php echo $subjectErr; ?></span><br><br>
    <button type="submit"><strong>Submit</strong></button>
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
