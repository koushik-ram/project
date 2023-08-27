<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $location = $_POST['location'];
  $date = $_POST['date'];

  // Validate the form data (you can add more validation if needed)
  if (empty($name) || empty($email) || empty($phone) || empty($location) || empty($date)) {
    // Handle the error, e.g., display an error message or redirect back to the form page
    echo "Please fill in all the required fields.";
  } else {
    // All form data is valid, process the booking
    // TODO: Perform any necessary operations with the data, e.g., save to a database, send confirmation email, etc.

    // Display a success message
    echo "Thank you for booking your COVID vaccination appointment. We will contact you shortly with further details.";
  }
}
?>
