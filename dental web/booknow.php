<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/booknow.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> Hak Dental Clinic </a>

    <nav class="navbar">
        <a href="./index.php">home</a>
        <a href="./services.php"> services</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<section class="book" id="book">

    <h1 class="heading"> <span>book</span> Your Appointment </h1>    

    <div class="row">

        <div class="image">
            <img src="./image/27953195_reproductologist_16-removebg-preview.png" alt="">
        </div>

        <form  action="connect.php" method="post">
            <h3>Fill this form</h3>
            <input type="text" name="name" placeholder="Name" class="box">
            <input type="number" name="number" placeholder="Number" class="box">
            <input type="email"  name="email" placeholder="Email" class="box">
            <input type="date" name="date" class="box">
            <input type="submit" name="BookNow_btn" value="book now" class="btn">
        </form>

    </div>

</section>


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="./index.php"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="./services.php"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="./About.php"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="./review.php"> <i class="fas fa-chevron-right"></i> review </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="./Generaldentistry.php"> <i class="fas fa-chevron-right"></i> General dentistry </a>
            <a href="./Cosmeticdentistry.php"> <i class="fas fa-chevron-right"></i> Cosmetic dentistry </a>
            <a href="./Orthodontics.php"> <i class="fas fa-chevron-right"></i> Orthodontics </a>
            <a href="./Restorativedentistry.php"> <i class="fas fa-chevron-right"></i> Restorative dentistry </a>
            <a href="./Oralsurgery.php"> <i class="fas fa-chevron-right"></i> Oral surgery </a>
            <a href="./Emergencydentistry.php"> <i class="fas fa-chevron-right"></i> Emergency dentistry </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 99999999 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> hakdental@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> hakdental@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400083 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> created by <span>Mr. Chanda Abdul Kareem / Ms. Shaikh Kulsum Qasim</span> | all rights reserved </div>

</section>



















<!-- custom js file link  -->
<script src="./js/script.js"></script>

</body>
</html>