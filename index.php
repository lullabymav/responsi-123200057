<?php
    require('connect.php');
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>

  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="" method="POST">
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
            <input type="submit" value="Login" name="submit">
          </div>
          <div class="signup-link">Not a member? <a href="registration_page.php">Signup now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $email = $_POST["email"];
        $pass = md5($_POST["pass"]);

        $sql = "SELECT * FROM user_register WHERE email='$email' AND pass='$pass'";

        $result = $mydb->query($sql);

        //$name = $mydb->query($query);
        // while($row = $result->fetch_object()){
        //     $fullname = $row->full_name;
        // }

        if ($result -> num_rows > 0) {
            // login successful
            session_start();
            echo "Login successful";
            header("location:https://crud-op-r4kjthgzqa-et.a.run.app/index.php");
        } else {
            // Login failed
            echo "Invalid email or password";
        }

        // $sql=mysqli_query($mydb, "SELECT * FROM staff WHERE username='$user' and password='$pass'");
        // $check=mysqli_num_rows($sql);
        // // $check = 1;

        // if($check>0){
        //     session_start();
        //     $_SESSION['username']=$user;
        //     $_SESSION['password']=$pass;
        //     $_SESSION['name']=$fullname;
        //     header("location:https://crud-op-r4kjthgzqa-et.a.run.app/index.php");
        // }
        // else{
        //     echo "<p align=center>Invalid username or password</p>";
        //     echo "<p align=center>Please try again</p>";
        // }

        $mydb->close();
    }
?>