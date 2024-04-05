<?php
require 'database.php';

function sanitize($input) {
    return htmlspecialchars($input);
}

// Initialize variables
$error = "";
$searchResults = [];

// Check if search query is submitted
if(isset($_POST['search'])) {
    $searchQuery = sanitize(trim($_POST['searchQuery']));
    // Prepare SQL statement to search for dissertations containing the search query
    $sql_search = "SELECT * FROM Dissertations WHERE Title LIKE ? OR Description LIKE ?";
    $stmt = $conn->prepare($sql_search);
    $searchParam = "%$searchQuery%";
    $stmt->bind_param("ss", $searchParam, $searchParam);
    
    // Execute the statement
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    // Store search results
    while ($row = $result->fetch_assoc()) {
        $searchResults[] = $row;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Dissertations</title>
    <link rel="stylesheet" type="text/css" href="dissertations.css">
</head>
<body>
<div class="header">
    <h1>Search Dissertations</h1>
    <!-- Your logo here -->
</div>
<div class="nav">
    <!-- Navigation links here -->
</div>

<!-- Search form -->
<div class="search-container">
    <form method="post" action="modifydissertations.php">
        <input type="text" id="searchQuery" name="searchQuery" placeholder="Search...">
        <button type="submit" name="search">Search</button>
    </form>
</div>

<!-- Display search results -->
<div class="search-results">
    <table>
        <thead>
            <tr>
                <th
