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
        <p>Pets - Create</p>
        <ul>
            <li><a href="<?php echo BASE_URL . "pets/create.php" ?>">Create</a></li>
            <li><a href="<?php echo BASE_URL . "pets/read.php" ?>">Read</a></li>
            <li><a href="<?php echo BASE_URL . "pets/update.php" ?>">Update</a></li>
            <li><a href="<?php echo BASE_URL . "pets/delete.php" ?>">Delete</a></li>
        </ul>
        <form action="" method="POST">
            Pet Name: <input type="text" name="pet_name"><br>
            Client ID: <input type="text" name="client_id"><br>
            Species: <input type="text" name="species"><br>
            <input type="submit">
        </form>

        <?php 
        // DATABASE QUERY. Insert new pet.
        // Step 1: Process the form:
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pet_name = $_POST["pet_name"];
            $client_id = $_POST["client_id"];
            $species = $_POST["species"];

            // Step 2: Insert the data
            // https://www.w3schools.com/php/php_mysql_insert.asp
            $sql = "INSERT INTO pet (client_id, name, species) VALUES ('{$client_id}', '{$pet_name}', '{$species}')";
            if ($conn->query($sql) === TRUE) {
                echo "New pet created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
        }
        ?>
    </div>
</body>
</html>
