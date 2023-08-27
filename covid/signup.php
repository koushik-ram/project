<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $newUsername = $_POST['new_username'];
  $newPassword = $_POST['new_password'];

  // Connect to the database
  $dbhost="localhost";
  $dbuser="root";
  $dbpass="";
  $dbname="covid";

  // Create a new database connection
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

  // Check the connection
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // Prepare and execute the SQL query to insert the new user
  $sql = "INSERT INTO signup (new_username, new_password) VALUES ('$newUsername', '$newPassword')";
  if ($conn->query($sql) === TRUE) {
    echo 'Sign-up successful!';

    // Redirect to the login page
    header('Location: login.html');
    exit();
  } else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>
