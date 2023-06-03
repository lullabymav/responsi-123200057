<?php
    ob_start();
    
    require('connect.php');

    if(isset($_POST['submit'])){
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $pass = md5($_POST["pass"]);

        $sql = "INSERT INTO user_register (firstName, lastName, email, pass) VALUES ('$firstName', '$lastName', '$email', '$pass')";

        if ($mydb->query($sql) === TRUE) {
            echo "Registration successful";
            header("location:index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $mydb->error;
        }

        $mydb->close();
    }
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration Form</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>

  <body>
    <div class="container-re">
      <div class="wrapper">
        <div class="title"><span>Registration Admin</span></div>
        <form action="" method="POST">
          <div class="row">
            <i class="fas fa-user" for="firstName"></i>
            <input type="text" name="firstName" id="firstName"  placeholder="First Name" required>
          </div>
          <div class="row">
            <i class="fas fa-user" for="lastName"></i>
            <input type="text" name="lastName" id="lastName"  placeholder="Last Name" required>
          </div>
          <div class="row">
            <i class="fas fa-envelope" for="email"></i>
            <input type="text" name="email" id="email"  placeholder="Email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock" for="pass"></i>
            <input type="password" name="pass" id="pass" placeholder="Password" required>
          </div>
          <!-- <div class="pass"><a href="#">Forgot password?</a></div> -->
          <div class="row button">
            <input type="submit" value="Signup" name="submit">
          </div>
          <div class="signup-link">Already have Account? <a href="index.php">Login now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
