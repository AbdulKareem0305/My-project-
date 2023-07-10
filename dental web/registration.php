<?php
include "connection.php";
if (isset($_POST['signup-button'])) {

  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $query="SELECT * FROM users WHERE email='$email'";
  $result=mysqli_query($con, $query);
  $num= mysqli_num_rows($result);

 if ($num==1) {
  echo '<script>alert("email is already taken")</script>';
  } else {
    $reg="INSERT INTO users(username,email,password)VALUES('$username','$email','$password')";
    mysqli_query($con, $reg);
    echo '<script>alert("registered successfully")</script>';
     header('location:http://localhost/dental web/login.php');
    
  }
  
}

?>