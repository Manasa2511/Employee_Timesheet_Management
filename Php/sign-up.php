<?php
include('connect.php');
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $contact = $_POST['contact'];

  // insert
  // Collect post variables
  $sql = "INSERT INTO `employee_db`.`sign_up` (`username`, `email`, `password`, `gender`, `contact`) 
  VALUES ( '$username', '$email', '$password', '$gender', '$contact');";
  

  if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    
         // Close the database connection
    $con->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sign-up.css">
    <title>Sign Up</title>
</head>
<body>
<div class="container">
    <h2>Sign Up</h2>
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group" style="display: flex;">
        <div class="label">
        <label for="gender" style="margin-bottom: 0px">gender:</label>
        </div>
        <div class="option" style="display: flex; margin-left:5px">
        <label for="male" style="margin-bottom: 0px; margin:0 15px">Male</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="female" style="margin-bottom: 0px; margin:0 15px">Female</label>
        <input type="radio" id="female" name="gender" value="female">
        </div>
      </div>
      <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="tel"  id="contact" name="contact" required>
      </div>
      <div class="already-login" style="text-align: center;
    padding-bottom: 10px;">
        <p>Already <a href="./login.php">Login?</a></p>
      </div>
      <div class="form-group">
        <button type="submit">Sign Up</button>
      </div>
    </form>
  </div>
</body>
</html>