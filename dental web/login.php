
<?php

if (isset($_POST['login_btn'])) {
  include "connection.php";

  $email=$_POST['email'];
  $password=$_POST['password'];
  $query="SELECT * FROM users where email='$email' && password='$password'";
  $result=mysqli_query($con, $query);
  $num= mysqli_num_rows($result);
  if ($num==1) {
    echo '<script>alert("loggin successfully")</script>';
     header('location:http://localhost/dental web/index.php');
  } else {
    
    echo '<script>alert("incorrect email or password")</script>';
     header('location:http://localhost/dental web/all%20subpages/regiter%20page/login.php');
    
  }
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/login.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method='post' class="sign-in-form">
            <h2 class="title">login in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password"  placeholder="Password" required />
            </div>
            <input type="submit" value="Login" name="login_btn"class="btn solid" />
            <p class="social-text">Or Sign in with Google</p>
			<input type="submit" value="Continue With Google" class="btn solid" />
            <!-- <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>
          <form action="registration.php" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required/>
            </div>
            <input type="submit" class="btn" name="signup-button" type="submit" value="register" />
            <p class="social-text"> Or Sign in with Google </p>
			<input type="submit" class="btn" value="continue wtih Google" />
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Welcome back, Create an account to manage your dental appointments and records.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="./image/about-img.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Welcome back, Login to access your account and manage your dental appointments and records.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Log in
            </button>
          </div>
          <img src="./image/book-img.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="./js/login.js"></script>
  </body>
</html>
