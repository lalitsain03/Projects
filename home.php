<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <!-- header section starts -->
     <section class="header">

        <a href="home.php" class="logo">travel.</a>
                 
        <nav class="navbar">
           <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

     </section>

     
    <!-- header section ends -->

     <!-- home section starts  -->
      <section class="home">

        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(images/photo4.jpg) no-repeat;">
                    <div class="content">
                        <span>explore,discover,travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/photo5.jpg) no-repeat;">
                    <div class="content">
                        <span>explore,discover,travel</span>
                        <h3>discover new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/photo6.jpg) no-repeat;">
                    <div class="content">
                        <span>explore,discover,travel</span>
                        <h3>makes your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
      </section>
     <!-- home section ends -->

   <!-- services section start   -->

   <section class="services">
       <h1 class="heading-title">our services</h1>
       <div class="box-container">
            <div class="box">
                <img src="images/adventure.png">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="images/tour.png">
                <h3>Tour guide</h3>
            </div>
            <div class="box">
                <img src="images/trekking.png">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="images/fire.png">
                <h3>Camp fire</h3>
            </div>
            <div class="box">
                <img src="images/off-road.png">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/camping.png">
                <h3>camping</h3>
            </div>
       </div>
   </section>
   <!-- services section end  -->

    <!-- home about section start  -->
     <section class="home-about">
        <div class="image">
            <img src="images/photo7.jpg">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.Facilis sapiente nobis repudiandae hic cum delectus
               accusamus praesentium ducimus quidem.Adipisci, hic. Modi inventore autem placeat velit omnis eos dolorum totam!</p>
            <a href="about.php" class="btn">read more</a>
        </div>
     </section>
    <!-- home about section end  -->

    
    <!-- home package section starts  -->
     <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            
            <div class="box">
                <div class="image">
                    <img src="images/photo8.jpg">
                </div>
                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                    <a href="package.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/photo9.jpg">
                </div>
                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                    <a href="package.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/photo10.jpg">
                </div>
                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                    <a href="package.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
     </section>
    <!-- home package section ENDS -->

    <!-- home offer section starts  -->

        <section class="home-offer">
            <div class="content">
                <h3>up to 50% off</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Commodi voluptas, dolorum provident recusandae explicabo
                   temporibus iste praesentium perferendis ea mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Rem nemo dignissimos sint aliquid sequi. 
                   Doloribus nobis corrupti quos explicabo doloremque aliquam, iusto dicta amet vel architecto. Sint a, 
                   laudantium non minus magni voluptatum illum nulla maxime cum hic temporibus quas.</p>
                   <a href="book.php" class="btn">book now</a>
            </div>
        </section>
    <!-- home offer section ends  -->










    <!-- footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask quetions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> abcd@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>
        </div>

        <div class="credit">created by <span>mr. web designer</span> | all rights reserved! </div>

    </section>
    

    <!-- footer section ends -->

    <!-- swiper js file link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>

</body>
</html>