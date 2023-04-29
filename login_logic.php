<?php 
    // Get the user input
$email = $_POST['email'];
$password = $_POST['password'];

// Connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'security');

// Construct the SQL query
$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

// Execute the query
$result = $mysqli->query($query);

// Check if the login was successful
if ($result->num_rows < 1) {

  // User is authenticated, redirect to the dashboard
  header('Location: index.php');
} else {
    
    header('Location: dashboard.php');
}
?>