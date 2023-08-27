<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $username = $_POST['username'];
  $password = $_POST['password'];

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

  // Prepare and execute the SQL query to retrieve the user
  $sql = "SELECT * FROM signup WHERE new_username='$username' AND new_password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows === 1) {
    // Successful login
    echo 'Login successful!';
    header('Location: home.html');
  } else {
    // Invalid login credentials
    echo 'Invalid username or password!';
  }

  // Close the database connection
  $conn->close();

  
}
?>
