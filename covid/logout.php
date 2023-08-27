<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
  // User is logged in, perform logout
  session_destroy();
  header("Location: home.html");
  exit();
} else {
  // User is not logged in, display message and redirect to login page
  echo "You are not logged in. Please login first.";
  header("Refresh: 3; URL=login.html");
  exit();
}
?>
