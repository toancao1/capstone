<?php
// https://www.geeksforgeeks.org/simple-contact-form-using-html-css-and-php/
// https://www.w3schools.com/php/php_form_complete.asp
// Email configuration 
$toEmail = 'admin@example.com'; 
$fromName = 'Sender Name'; 
$formEmail = 'sender@example.com'; 

$statusMsg = '';
$headers = ''; 

if(isset($_POST['submit'])){ 
    $firstname = trim($_POST['firstname']); 
    $lastname = trim($_POST['lastname']); 
    $email = trim($_POST['email']); 
    $subject = trim($_POST['subject']); 
    $Subject = trim($_POST['Subject']); 

    if(empty($firstname)){ 
         $statusMsg .= 'Please enter your first name.<br/>'; 
    } 
    if(empty($lastname)){ 
        $statusMsg .= 'Please enter your last name.<br/>'; 
    } 
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
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
            <p><b>Subject: </b>".$Subject."</p> 
        "; 
         
       
        $headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n"; 
         
        mail($toEmail, $subject, $htmlContent, $headers); 
         
        $status = 'success'; 
        header("Location: thank_you.php"); 
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
            <span class="dropbtn" onclick="toggleDropdown('deleteDropdown')">Delete Catalog</span>
            <div class="dropdown-content" id="deleteDropdown">
              <a href="deletebooks.php" onclick="redirectTo('deletebooks.php')">Delete Books</a>
              <a href="deletejournals.php" onclick="redirectTo('deletejournals.php')">Delete Journals</a>
              <a href="deleteimages.php" onclick="redirectTo('deleteimages.php')">Delete Images</a>
              <a href="deletevideos.php" onclick="redirectTo('deletevideos.php')">Delete Videos</a>
              <a href="deletedissertations.php" onclick="redirectTo('deletedissertations.php')">Delete Dissertations</a>
            </div>
          </div>
        </div>
      </div>
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
        <button type="submit" onclick="window.location.href='./contact.php'"><strong>Contact Page</strong></button>
    </div>
</body>
</html>
