<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>
        
        <!-- swiper css link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        
        <!-- Custom CSS Styling -->
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
        <!-- header section starts -->
        <section class="header">
            <a class="logo" href="home.php">ChaBeeBus</a>

            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.php">About us</a>
                <a href="package.php">Package</a>
                <a href="book.php">Book</a>
                <a href="admin.php">Admin</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
        <!-- header section ends -->

        <!-- home section starts -->
        <section class="home">
            <div class="swiper home-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide" style="background: url(img/busmeta.png) no-repeat;">
                            <div class="content">
                                <span style="color: White;
                            -webkit-text-stroke:1px black;
                            -webkit-text-fill-color:White;">explore, discover, travel</span>
                                <h3 style="color: White;
                                -webkit-text-stroke:1px black;
                                -webkit-text-fill-color:White;">Travel with us</h3>
                                <a href="book.php" class="btn">Book Now</a>
                            </div>
                        </div>

                        <div class="swiper-slide slide" style="background: url(img/bluredd.png) no-repeat;">
                            <div class="content">
                            <span style="color: White;
                            -webkit-text-stroke:1px black;
                            -webkit-text-fill-color:White;">explore, discover, travel</span>
                            <h3 style="color: White;
                            -webkit-text-stroke:1px black;
                            -webkit-text-fill-color:White;">Travel to new places</h3>
                            <a href="package.php" class="btn">Discover more</a>
                            </div>
                        </div>
                    
                        <div class="swiper-slide slide" style="background: url(img/blurbusbg3.jpg) no-repeat;">
                            <div class="content">
                                <span style="color: White;
                            -webkit-text-stroke:1px black;
                            -webkit-text-fill-color:White;">explore, discover, travel</span>
                                <h3 style="color: White;
                            -webkit-text-stroke:1px black;
                            -webkit-text-fill-color:White;">Make your tour worthwhile</h3>
                                <a href="package.php" class="btn">Discover more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
        </section>
        <!-- home section ends -->

        <!-- Services Section starts -->
        <section class="services">
            <h1 class="heading-title">Our Services</h1>

            <div class="box-container">
                <div class="box">
                    <img src="img/adven.png" alt="">
                    <h3>Adventure</h3>
                </div>
                
                <div class="box">
                    <img src="img/tourist.png" alt="">
                    <h3>Tour</h3>
                </div> 

                <div class="box">
                    <img src="img/trekking.png" alt="">
                    <h3>Trekking</h3>
                </div> 

                <div class="box">
                    <img src="img/campfire.png" alt="">
                    <h3>Camp fire</h3>
                </div> 

                <div class="box">
                    <img src="img/offroad.png" alt="">
                    <h3>Off road</h3>
                </div>

                <div class="box">
                    <img src="img/camping.png" alt="">
                    <h3>Camping</h3>
                </div> 
            </div>
        </section>
        <!-- Services Section ends -->

        <!-- home about section starts -->
        <section class="home-about">
            <div class="image">
                <img src="img/aboutbus.png" alt="">
            </div>

            <div class="content">
                <h3>About us</h3>
                <p>It is a long established fact that a reader will be distracted 
                    by the readable content of a page when looking at its layout. 
                    The point of using Lorem Ipsum is that it has a more-or-less 
                    normal distribution of letters, as opposed to using 'Content 
                    here, content here', making it look like readable English. 
                </p>
                <a href="about.php" class="btn">read more</a>
            </div>
        </section>
        <!-- home about section ends -->

        <!-- home packages section starts -->
        <section class="home-packages">

            <h1 class="heading-title">Our Packages</h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="img/schoolbus.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Travel and Tour</h3>
                        <p>It is a long established fact that a reader will be distracted.</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="img/schoolbus2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Travel and Tour</h3>
                        <p>It is a long established fact that a reader will be distracted.</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="img/schoolbus3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Travel and Tour</h3>
                        <p>It is a long established fact that a reader will be distracted.</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>


            </div>
                <div class="load-more"><a href="package.php" class="btn">Load more</a></div>
            </div>
        </section>
        <!-- home packages section ends  -->

        <!-- home offer section starts -->
        <section class="home-offer">
            <div class="content">
                <h3>upto 50% off</h3>

                <p>It is a long established fact that a reader will be distracted 
                    by the readable content of a page when looking at its layout.
                </p>

                    <a href="book.php" class="btn">book now</a>
            </div>
        </section>
        <!-- home offer section ends -->

        <!-- footer section starts -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="home.php"><i class="fas fa-angle-right "></i>Home</a>
                    <a href="home.php"><i class="fas fa-angle-right "></i>Home</a>
                    <a href="home.php"><i class="fas fa-angle-right "></i>Home</a>
                    <a href="home.php"><i class="fas fa-angle-right "></i>Home</a>
                </div>

                <div class="box">
                    <h3>Extra Links</h3>
                    <a href="#"><i class="fas fa-angle-right "></i>Ask Questions</a>
                    <a href="#"><i class="fas fa-angle-right "></i>About us</a>
                    <a href="#"><i class="fas fa-angle-right "></i>Privacy Policy</a>
                    <a href="#"><i class="fas fa-angle-right "></i>Terms of use</a>
                </div>
                
                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#"><i class="fas fa-phone "></i>+639-518-152-728</a>
                    <a href="#"><i class="fas fa-phone "></i>+639-518-152-728</a>
                    <a href="#"><i class="fas fa-envelope"></i>email@gmail.com</a>
                    <a href="#"><i class="fas fa-map "></i>Davao City, Philippines</a>            
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"> <i class="fab fa-facebook-f "></i>facebook</a>
                    <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
                    <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
                </div>
            </div>

            <div class="credit"> created by <span>euniquecorn</span> | all rights reserved
            </div>
        </section>
        <!-- footer section ends -->



        <!-- swiper js link -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <!-- custom js file link -->
        <script src="javascript/script.js"></script>
    </body>
</html>