<?php
// https://www.geeksforgeeks.org/simple-contact-form-using-html-css-and-php/
// https://www.w3schools.com/php/php_form_complete.asp
// https://www.codexworld.com/send-beautiful-html-email-using-php/
// https://stackoverflow.com/questions/42255375/filter-varemail-filter-validate-email-not-working-in-if-condition
// https://stackoverflow.com/questions/20631374/php-email-validation-filter-validate-email-not-working
// Email config
$Email = 'bob@gmail.com';
$fromName = 'Bob';
$formEmail = 'bob@gmail.com';

$statusMsg = '';
$headers = '';

if(isset($_POST['submit'])){
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);

    if(empty($firstname)){
        $statusMsg .= 'Please enter your first name.<br/>';
    }
    if(empty($lastname)){
        $statusMsg .= 'Please enter your last name.<br/>';
    }
    if(empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL == FALSE)){
        $statusMsg .= 'Please enter a valid email.<br/>';
    }
    if(empty($subject)){
        $statusMsg .= 'Please enter subject.<br/>';
    }

    if(empty($statusMsg)){
        $subject = 'New contact request submitted';
        $htmlContent = "
            <h2>Contact Request Details</h2>
            <p><b>First Name: </b>".$firstname."</p>
            <p><b>Last Name: </b>".$lastname."</p>
            <p><b>Email: </b>".$email."</p>
            <p><b>Subject: </b>".$subject."</p>
        ";

        $headers .= 'From: '.$fromName.' <'.$formEmail.'>' . "\r\n";

        if(mail($Email, $subject, $htmlContent, $headers)){
            $statusMsg = 'success';
            header("Location: thank_you.php");
            exit;
        } else {
            $statusMsg = 'Error sending email. Please try again later.';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thank You Page</title>
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="index.js"></script>
</head>
<body>
<div class="header">
    <h1>Thank You Page</h1>
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
        <!-- Source of image: <a href="https://www.flaticon.com/free-icons/email" title="email icons">Email icons created by Freepik - Flaticon</a>-->
      <a href="email.php"><img src="images/email.png" alt="email icon" width="100" height="80"></a>
      </nav>
  </div>
  <div class="container">
    <p>Thank you! Your contact request has been submitted successfully. We will get back to you soon.</p>
    <form action="contact.php" method="get">
        <button type="submit"><strong>Contact</strong></button>
    </form>
</div>
<footer>
    &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>

