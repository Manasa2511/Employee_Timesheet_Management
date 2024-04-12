<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if(isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];

    // Query to check if the username and password exist in the database
    $sql = "SELECT * FROM employee_db WHERE username='$uname' AND password='$psw'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User authenticated, redirect to dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        // Authentication failed, redirect back to login page with error message
        header("Location: login.php?error=InvalidCredentials");
        exit();
    }
}

// Close connection
$conn->close();

// If login is successful, redirect to the dashboard page
header("Location: ../Html/dashboard.html");
exit();
?>
