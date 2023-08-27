<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $location = $_POST['location'];
  $date = $_POST['date'];
  $persons = $_POST['persons'];

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

  // Prepare and execute the SQL query to insert the booking information
  $sql = "INSERT INTO bookings (location, date, persons) VALUES ('$location', '$date', $persons)";
  if ($conn->query($sql) === TRUE) {
    // Get the generated booking ID
    $bookingId = $conn->insert_id;

    // Generate the booking bill
    $bill = '<h2 class="bill-heading">Booking Bill</h2>';
    $bill .= '<form class="bill-form">';
    $bill .= '<div><label class="bill-label">Booking ID:</label> <span class="bill-value">' . $bookingId . '</span></div>';
    $bill .= '<div><label class="bill-label">Location:</label> <span class="bill-value">' . $location . '</span></div>';
    $bill .= '<div><label class="bill-label">Date:</label> <span class="bill-value">' . $date . '</span></div>';
    $bill .= '<div><label class="bill-label">Number of Persons:</label> <span class="bill-value">' . $persons . '</span></div>';
    $bill .= '</form>';

    echo $bill;

    // Add a home button to redirect to the home page
    echo '<div><a href="home.html" class="btn btn-primary">Home</a></div>';
  } else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>
<style>
    .bill-heading {
      text-align: center;
      color: #333;
    }

    .bill-form {
      margin: 20px;
      padding: 20px;
      background-color: #f5f5f5;
    }

    .bill-label {
      font-weight: bold;
    }

    .bill-value {
      color: #888;
    }
  </style>














