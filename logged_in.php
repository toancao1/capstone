<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_user_id'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit;
}

// Check if login result is set
if (isset($_SESSION['login_result'])) {
    // Retrieve login result from session
    $result = $_SESSION['login_result'];

    // Check if login is successful
    if ($result["ok"]) {
        // Redirect to logged_in.php if login is successful
        header("Location: logged_in.php");
        exit;
    } else {
        // Handle unsuccessful login attempt
        // For example, display an error message
        $error_msg = "Login failed. Please try again.";
    }
}

// Retrieve the logged-in user ID from the session
$logged_user_id = isset($_SESSION['logged_user_id']) ? $_SESSION['logged_user_id'] : null;

if (isset($_GET['logout'])) {
    session_destroy();
    // Redirect to the login page after logout
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome User <?php echo isset($logged_user_id) ? $logged_user_id : ""; ?></h1>
    <?php if (isset($error_msg)) : ?>
        <p><?php echo $error_msg; ?></p>
    <?php endif; ?>
    <p>You have successfully logged in.</p>
    <!-- Add a logout link -->
    <a href="?logout=true">Logout</a>
    <footer>
    &copy; 2024 Ottawa Academic University. All Rights Reserved.
</footer>
</body>
</html>
