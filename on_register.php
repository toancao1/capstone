<?php
function on_register($conn) {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (empty($username) || empty($email) || empty($password)) {
        return ["ok" => 0, "msg" => "All fields are required.", "form_reset" => true];
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ["ok" => 0, "msg" => "Invalid email format.", "form_reset" => true];
    } else {
        //hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute the query to insert user into database
        $sql = "INSERT INTO users (Username, Email, Password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        // Check if prepare() succeeded
        if (!$stmt) {
            return ["ok" => 0, "msg" => "Database error: " . mysqli_error($conn), "form_reset" => false];
        }

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);

        // Execute the statement
        $success = mysqli_stmt_execute($stmt);

        // Check if execution succeeded
        if ($success) {
            // Registration successful
            return ["ok" => 1, "msg" => "Registration successful.", "form_reset" => true];
        } else {
            // Registration failed
            return ["ok" => 0, "msg" => "Registration failed. Please try again later. Error: " . mysqli_error($conn), "form_reset" => false];
        }
    }
}
?>
