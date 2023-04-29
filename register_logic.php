<?php
// get user input
$email = $_POST['email'];
$password = $_POST['password'];

// connect to database
$mysql = new mysqli('localhost', 'root', '', 'security');

// sql statement
$query = "INSERT INTO `users`(email, password) VALUES ('$email','$password')";

// execute query
$results = $mysql->query($query);
echo($results);
if ($results) {
    echo('<script>alert("Successfully ceated an account")</script>');
    header('Location: index.php');
} else {
    header('location: register_page.php');
    echo('<script>alert("FAILED TO CREATE ACCOUNT")</script>');
}
?>