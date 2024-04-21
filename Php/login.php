<?php
include('connect.php');
// global $con;
// Check if the form is submitted
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Query to check if the username and password exist in the database
    $sql = "SELECT * FROM employee_db WHERE username='$username' AND password='$password'";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        // User authenticated, redirect to dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        // Authentication failed, redirect back to login page with error message
        echo "<script>alert(' invalid credentials ');</script> ";
        // echo "login failed";
        // header("Location: /employee_timesheet_management/Php/login.php");
        // exit();
    }
}

// If login is successful, redirect to the dashboard page
// header("Location: ../Html/dashboard.html");
// exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Log In</title>
</head>

<body>
    <div class="main">
        <div class="bg-img">
            <img src="../img/login-background-image.jpg" alt="">
        </div>
        <div class="imgcontainer">
            <form action="" method="post">
                <div class="container">
                    <div class="head">
                        <h1>Sign In</h1>
                    </div>
                    <label for="username"><b>Employee Name</b></label>
                    <input type="text" placeholder="Employee Name"id="username" name="username" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" id="password" name="password" required>

                    <button type="submit" name="login">Login</button>
                    <!-- <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label> -->
                </div>
                <div class="container">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <!-- <span class="psw">New Employee <a href="./sign-up.php">sign-up?</a></span> -->
                </div>
            </form>
        </div>
    </div>

</body>

</html>



