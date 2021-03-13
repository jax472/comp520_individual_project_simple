<?php

// Connect to DB
// Using mysqli: https://www.php.net/manual/en/book.mysqli.php
$conn = new mysqli('localhost', 'root', '', 'animocity');

// Check connection
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}

// Create constant for base_url that will be used for building links between pages
define("BASE_URL", 'http://localhost/comp520project/');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animocity</title>
</head>
<body>
    <h1><a href="<?php echo BASE_URL ?>">Animocity</a></h1>
    <p>This application will provide an administrator interface for CRUD operations on the following tables:</p>
    <ul>
      <li><a href="<?php echo BASE_URL . "pets/list.php" ?>">Pets</a></li>
    </ul>

    <!--
      Individual page content will go here, everything else above and below the "page-content"
      div will be common to all pages. 
    -->
    <div class="page-content">
      <p>Welcome to animocity!</p>
    </div>
</body>
</html>
