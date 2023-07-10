<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete responsive Dental clinic website design </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
    
    <a href="./adminlogin.php" class="logo"> Hak Dental Clinic </a>

    <nav class="navbar">
        <a href="./index.php">home</a>
        <a href="#services"> services</a>
        <a href="#about"> about</a>
        <a href="#review">Testimonials</a>
        <a href="#book"> Book Now</a>
        <a href="./login.php" > login</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="./image/18707050_TaeAugust21-removebg-preview.png" alt="">
    </div>

    <div class="content">
        <h3>You deserve to smile with confidence.</h3>
        <p>"Smile with confidence and maintain your oral health with our expert dental care. Our experienced team of dentists provide personalized treatments to meet your unique needs. Book now and experience the difference of quality dental care in a comfortable and friendly environment. Your perfect smile is just a click away."</p>
    </div>

</section>

<!-- home section ends -->



<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>General dentistry</h3>
            <p>Routine check-ups, cleanings, and treatments for tooth decay and gum disease.</p>
            <a href="./Generaldentistry.php" class="btn" > learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Cosmetic dentistry</h3>
            <p>Teeth whitening, veneers, and other cosmetic procedures to enhance the appearance of the teeth.</p>
            <a href="./Cosmeticdentistry.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Orthodontics</h3>
            <p>Braces, aligners, and other treatments to correct the alignment of teeth and jaws.</p>
            <a href="./Orthodontics.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Restorative dentistry</h3>
            <p>Fillings, crowns, bridges, and implants to repair damaged or missing teeth.</p>
            <a href="./Restorativedentistry.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Oral surgery</h3>
            <p>Extractions, wisdom teeth removal, and other surgical procedures.</p>
            <a href="./Oralsurgery.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <h3>Emergency dentistry</h3>
            <p>Treatment for dental emergencies such as toothaches, broken teeth, and abscesses.</p>
            <a href="./Emergencydentistry.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="./image/15184256_5540021-removebg-preview.png" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>At our dental clinic, we are dedicated to providing our patients with the highest quality dental care in a comfortable and welcoming environment. Our team of experienced and skilled dental professionals is committed to helping you achieve and maintain optimal oral health. From routine cleanings to complex dental procedures, we are here to provide you with the care and attention you deserve. Contact us today to schedule an appointment and experience the difference that our personalized and compassionate approach can make.</p>
            <a href="./About.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->



<!-- booking section starts   -->

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

<!-- booking section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.png" alt="">
            <h3>Ziyan Shaikh</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text">"I've been a patient of this dental clinic for years, and I can't recommend them highly enough. The staff is friendly and professional, and they always make me feel welcome. They take the time to explain everything to me and answer any questions I have. I've had a few procedures done here, and I've always been impressed with the level of care I receive. Highly recommend!"</p>
        </div>

        <div class="box">
            <img src="image/pic-3.png" alt="">
            <h3>Umar Ali</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">"I've had a lot of dental work done over the years, and this clinic is by far the best I've been to. The staff is knowledgeable and caring, and they go above and beyond to make sure you're comfortable and informed. They use the latest technologies and techniques to provide the best possible care. I highly recommend this clinic to anyone looking for top-notch dental care."</p>
        </div>

        <div class="box">
            <img src="image/pic-3.png" alt="">
            <h3>Azman Haque</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">"I recently had a dental emergency and this clinic was able to see me right away. The staff was friendly and professional, and they put me at ease right away. The dentist was able to quickly diagnose the problem and provide me with the treatment I needed. I highly recommended"</p>
        </div>

        <div class="box">
            <img src="image/pic-2.png" alt="">
            <h3>Kashaf Bano</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">"I used to dread going to the dentist, but that all changed when I started coming to this clinic. The staff is so friendly and welcoming, and they always make me feel comfortable. I've had a few procedures done here, and they've all been completely pain-free. I recommend this clinic to anyone looking for a positive dental experience."</p>
        </div>
    
    </div>

</section>

<!-- review section ends -->



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
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

<!-- footer section ends -->



















<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>