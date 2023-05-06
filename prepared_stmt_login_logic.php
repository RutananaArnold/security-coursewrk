<!-- with prepared statements -->
<?php 
    // Get the user input
$email = $_POST['email'];
$password = $_POST['password'];

// Connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'security');

// Construct the SQL query
$query = "SELECT * FROM users WHERE email = ? AND password = ?";

$stmt = $mysqli->prepare($query);

// Bind the user input to the prepared statement
$stmt->bind_param('ss', $email, $password);

// Execute the query
$stmt->execute();

// Get the result set
$result = $stmt->get_result();

// Check if the login was successful
if ($result->num_rows < 1) {
  // User is authenticated, redirect to the dashboard
  header('Location: index.php');
} else { 
    header('Location: dashboard.php');
}
?>