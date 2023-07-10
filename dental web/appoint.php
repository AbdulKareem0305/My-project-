<?php
if (isset($_POST['BookNow_btn'])) {
  include "connection.php";

  $name=$_POST['name'];
  $number=$_POST['number'];
  $email=$_POST['email'];
  $date=$_POST['date'];
  $query="SELECT * FROM apptable where number='$number' && email='$email'";
  $result=mysqli_query($con, $query);
  $num= mysqli_num_rows($result);
  if ($num==1) {
    echo '<script>alert("successfull")</script>';
    header('location:http://localhost/dental web/Successful.php');
  } else {
    
    echo '<script>alert("not successfull")</script>';
    header('location:http://localhost/dental web/index.php');
    
  }
  
}
?>