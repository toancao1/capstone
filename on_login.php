<?php
function on_login($conn, $username, $password)
{
    $sql_role = "SELECT role FROM library_members WHERE username = ?";
    $stmt_role = mysqli_prepare($conn, $sql_role);
    mysqli_stmt_bind_param($stmt_role, "s", $username);
    mysqli_stmt_execute($stmt_role);
    $result_role = mysqli_stmt_get_result($stmt_role);

    if (!$result_role || mysqli_num_rows($result_role) === 0) {
        return [
            "ok" => 0,
            "msg" => "Invalid username or password."
        ];
    }

    $role_row = mysqli_fetch_assoc($result_role);
    $role = $role_row['role'];

    return [
        "ok" => 1,
        "role" => $role
    ];

    // Query to find the user by username
    $sql = "SELECT * FROM library_members WHERE username = ?";
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
