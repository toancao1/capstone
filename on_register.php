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
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); 

        // Prepare and execute the query to insert user into database
        $sql = "INSERT INTO library_members (username, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if (!$stmt) {
            return ["ok" => 0, "msg" => "Database error: " . mysqli_error($conn), "form_reset" => false];
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);

        $success = mysqli_stmt_execute($stmt);

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


