<?php
$query="SELECT * FROM users where email='$email' && password='$pass'";
$result=mysqli_query($con, $query);
$num= mysqli_num_rows($result);
 if ($num==1) {
    echo '<script>alert("loggin successfully")</script>';
    header("location:http://localhost/myproject/My%20Project/index.php");
  } else {
  
    echo '<script>alert("incorrect email or password")</script>';
    header('location:http://localhost/myproject/all%20subpages/regiter%20page/login.php');
   
  }
 

?>