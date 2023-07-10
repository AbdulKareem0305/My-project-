<?php
$server= "localhost";
$user = "root";
$password = "";
$db = "hakdentaildb";

$con= mysqli_connect($server,$user,$password,$db);
 if($con){
   ?>
   <script>
     alert("connection successfull");
     </script>
     <?php
 }else{
  ?>
  <script>
    alert(" not connected");
    </script>
    <?php
 }

?>