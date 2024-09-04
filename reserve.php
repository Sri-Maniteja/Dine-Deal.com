<?php
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $people = $_POST['people'];

  // Connect to database
  $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

  // Insert reservation data into database
  $query = "INSERT INTO reservations (name, email, phone, date, time, people) VALUES ('$name', '$email', '$phone', '$date', '$time', '$people')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "Reservation successful! We look forward to seeing you.";
  } else {
    echo "Error: " . mysqli_error($conn);
  }

  // Close database connection
  mysqli_close($conn);
?>
