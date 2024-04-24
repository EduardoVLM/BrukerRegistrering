<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Admin";
$dbname = "brukerRegistrering";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

// Insert data into database
$sql = "INSERT INTO users (first_name, last_name, email) VALUES ('"$first_name'", '"$last_name"', '"$email"')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
