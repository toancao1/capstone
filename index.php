<!DOCTYPE html>
<html lang="en">
<head>
  <title>University Library Management System - Home Page</title>
  <link rel="stylesheet" href="index.css">
  <script src="index.js"></script>
</head>
<body>
  <h1>University Library Management System</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="books.php">Books</a>
    <a href="about.php">About</a>
    <a href="help.php">Help</a>
    <select id="catalogDropdown">
      <option value="" disabled selected>Select Catalog</option>
      <option value="books">Books</option>
      <option value="journals">Journals</option>
      <!-- Add more options for other catalog types -->
    </select>
    <img src="Images/Picture5.svg" alt="logo" onclick="redirectToCatalog()">
  </nav>

  <p>Welcome to our university library website LMS</p>

  <footer>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
  </footer>

  <script>
    function redirectToCatalog() {
      var dropdown = document.getElementById("catalogDropdown");
      var selectedOption = dropdown.options[dropdown.selectedIndex].value;

      if (selectedOption) {
        // Redirect to the selected catalog page
        window.location.href = selectedOption + ".php";
      }
    }
  </script>
</body>
</html>