<?php
function on_login($conn, $email, $password)
{
    $email = trim($email);
    $password = trim($password);

    // Check if email and password are provided
    if (empty($email) || empty($password)) {
        return [
            "ok" => 0,
            "msg" => "Email and password are required fields."
        ];
    }

    // Query to find the user by email
    $sql = "SELECT * FROM `users` WHERE `Email` = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if user with the provided email exists
    if (!$result || mysqli_num_rows($result) === 0) {
        return [
            "ok" => 0,
            "msg" => "Invalid email or password."
        ];
    }

    // Fetch the user data
    $users = mysqli_fetch_assoc($result);

    // Verify the password
    if (!password_verify($password, $users["Password"])) {
        return [
            "ok" => 0,
            "msg" => "Invalid email or password."
        ];
    }

    // Start the session and set the logged-in user ID
    session_start();
    $_SESSION['logged_user_id'] = $users["id"];

    return [
        "ok" => 1
    ];
}
?>
