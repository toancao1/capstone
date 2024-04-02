<?php
function on_login($conn, $username, $password)
{
    $username = trim($username);
    $password = trim($password);

    // Check if username and password are provided
    if (empty($username) || empty($password)) {
        return [
            "ok" => 0,
            "msg" => "Username and password are required fields."
        ];
    }

    // Query to find the user by username
    $sql = "SELECT * FROM librarians WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if user if the provided username exists
    if (!$result || mysqli_num_rows($result) === 0) {
        return [
            "ok" => 0,
            "msg" => "Invalid username or password."
        ];
    }

    // Fetch the user data
    $user = mysqli_fetch_assoc($result);

    // Verify the password
    if (!password_verify($password, $user["Password"])) {
        return [
            "ok" => 0,
            "msg" => "Invalid username or password."
        ];
    }

    session_start();
    $_SESSION['logged_user_id'] = $user["id"];

    return [
        "ok" => 1
    ];
}
?>
