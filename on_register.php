<?php
// Function to handle user registration
function on_register($conn) {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Validate form data
    if (empty($username) || empty($email) || empty($password)) {
        return ["ok" => 0, "msg" => "All fields are required.", "field_error" => ["username" => "All fields are required.", "email" => "All fields are required.", "password" => "All fields are required."], "form_reset" => true];
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ["ok" => 0, "msg" => "Invalid email format.", "field_error" => ["email" => "Invalid email format."], "form_reset" => true];
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute the query to insert user into database
        $sql = "INSERT INTO users (Username, Email, Password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);

        if (mysqli_stmt_execute($stmt)) {
            // Registration successful
            return ["ok" => 1, "msg" => "Registration successful.", "form_reset" => true];
        } else {
            // Registration failed
            return ["ok" => 0, "msg" => "Registration failed. Please try again later. Error: " . mysqli_error($conn), "form_reset" => false];
        }
    }
}
?>
