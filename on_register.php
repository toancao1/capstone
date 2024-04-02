<?php
function on_register($conn) {
    // Ensure the database connection is established
    if (!$conn) {
        return ["ok" => 0, "msg" => "Database connection error.", "form_reset" => false];
    }

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (empty($username) || empty($password)) {
        return ["ok" => 0, "msg" => "All fields are required.", "form_reset" => true];
    } else {
        // Hash password
        $password = "user_password";
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare and execute the query to insert user into database
        $sql = "INSERT INTO librarians (username, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        // Check if prepare() succeeded
        if (!$stmt) {
            return ["ok" => 0, "msg" => "Database error: " . mysqli_error($conn), "form_reset" => false];
        }

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);

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
