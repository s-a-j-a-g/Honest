<?php

    session_start();

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">  
        <meta name = "viewport" content = "width=device-width", initial-scale = 1.0">
        <title>Honest Beauty</title>
        <link rel = "stylesheet" href="style_index.css">
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,500;0,600;1,500;1,700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/d4e285b1a1.js" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <!---------Header--------->
        <section class = "header">
            <span>
                <div class = "left-column">
                    <a class = "company-logo" href = "index.html">
                        <img src = "images/logo.jpg">
                    </a>
                </div>
                <div class = "right-column">
                    <div class = "top-row">
                        <?php

                            if(isset($_SESSION["userUsername"])){
                                echo '<a href = "profile.php">' . $_SESSION["userName"] . '</a>';
                                echo '<img src = "images/bag.svg" width = "30px", height = "30px">';
                                echo '<a href = "includes/logout.inc.php">Log Out</a>';
                            }
                            else{
                                echo '<a href = "login.html">SIGN IN</a>';
                                echo '<img src = "images/bag.svg" width = "30px", height = "30px">';
                            }
                        ?>
                    </div>
                    <div class = "bottom-row">
                        <nav>
                            <div class = "nav-links" id = "navLinks">
                                <i class="fa fa-times" onclick = "hideMenu()"></i>
                                <ul>
                                    <li><a href = "index.html">HOME</a></li>
                                    <li><a href = "about.html">ABOUT</a></li>
                                    <li><a href = "products.html">PRODUCTS</a></li>
                                    <li><a href = "contact.html">CONTACT</a></li>    
                                </ul>
                            </div>
                            <i class="fa fa-bars" onclick = "showMenu()"></i>   
                        </nav>
                    </div>
                </div>
            </span>
        </section>


        <section class = "sub-header">
            <div class = "text-box">
                <h1>Clean Beauty</h1>
                <p>100% CRUELTY FREE</p>
                <a href = "" class = "hero-btn">&#8594</a>
            </div>
        </section>


        <!---------Tagline--------->
        <section class = "tagline">
            <h1>SAFE FOR YOU AND THE PLANET</h1>
        </section>


        <!---------Exclusive Product--------->
        <section class = "exclusive-product">
            <div class = "small-container">
                <div class = "row_exclusive-product">
                    <div class = "exclusive-product-column">
                        <img src = "images/exclusive-product.jpg" class = "offer-img">
                    </div>
                    <div class = "exclusive-product-column">
                        <p>Exclusively available on Honest Store</p>
                        <h1>Luminizing Glow Powder</h1>
                        <small>A silky baked luminizing powder that creates a beautiful, natural glow. Made with Light-Reflecting Pigments. Works for all skin types.</small>
                        <a href = "" class = "exclusive-buy-now-btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </section>


        <!---------Owner Quote--------->
        <section class = "owner_quote">
            <div class = "row-owner_quote">
                <div class = "owner_quote-column">
                    <div>
                        <i class="fas fa-quote-left"></i>
                        <p>I created The Honest Company because you shouldn’t have to choose between what works & what’s good for you.<br>
                        </p>
                        <h3>- Jessica Alba</h3>
                    </div>
                    <img src = "images/jessica_alba.png">
                </div>
            </div>
        </section>


        <!---------Model Photos--------->
        <section class = "models">
            <div class="row-models">
                <div class = "models-column">
                    <img src = "images/model1.jpeg">
                    <div class = "layer">
                        <h3>Veronica</h3>
                    </div>
                </div>
                <div class = "models-column">
                    <img src = "images/model2.jpeg">
                    <div class = "layer">
                        <h3>Krystal</h3>
                    </div>
                </div>
                <div class = "models-column">
                    <img src = "images/model3.jpeg">
                    <div class = "layer">
                        <h3>Alina</h3>
                    </div>
                </div>
                <!-- <div class = "models-column">
                    <img src = "images/model4.jpeg">
                    <div class = "layer">
                        <h3>Becky</h3>
                    </div>
                </div> -->
            </div>
        </section>


        <!---------Testimonials--------->
        <section class = "testimonials">
            <h1>Testimonials</h1>
            <div class="row-testimonials">
                <div class = "testimonials-column">
                    <h3>WE MAKE CLEAN, SUSTAINABLE, WELL-DESIGNED PRODUCTS THAT WORK</h3>
                    <p>Health and wellness are a universal foundation for a life well-lived and I believe it’s our responsibility to leave the world better than when we found it. We care about all people and the planet.
                        <br>- Jessica Alba, Founder
                    </p>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class = "testimonials-column">
                    <h3>BLAH BLAH BLAH</h3>
                    <p>YOU SHOULDN'T HAVE TO CHOOSE BETWEEN WHAT WORKS AND WHAT'S GOOD FOR YOU
                        <br>- Jessica Alba, Founder
                    </p>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class = "testimonials-column">
                    <h3>BLAH BLAH BLAH</h3>
                    <p>I will 100% be purchasing this again if I run out before my pregnancy is done
                        <br>- BRITTANYB26
                    </p>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </section>


        <!---------Featured Products--------->
        <section class = "featured-products">
            <h1>Featured Products</h1>
            <p>Best Price for our Organic Products</p>
            <div class="row-products">
                <div class = "products-column">
                    <img src = "images/full_defense_kit.jpg">
                    <h5>Full Defense Kit</h5>
                    <h4>Rs. 1499</h4>
                </div>
                <div class = "products-column">
                    <img src = "images/magic_gel_to_milk_makeup_melting_cleanser.jpg">
                    <h5>Magic Gel-To-Milk Makeup Melting Cleanser</h5>
                    <h4>Rs. 799</h4>
                </div>
                <div class = "products-column">
                    <img src = "images/elevated_hydration_mist.jpg">
                    <h5>Elevated Hydration Mist</h5>
                    <h4>Rs. 399</h4>
                </div>
            </div>
        </section>


        <!---------Footer--------->
        <section class = "footer">
            <div class = "row1-footer">
                <div class = "footer-column">
                    <h4>About Us</h4>
                    <a href = "blog.html">Blog</a>
                    <a href = "about.html">Our Story</a>
                    <a href = "honest_standards.html">Honest Standards</a>
                    <a href = "faqs.html">FAQs</a>
                    <a href = "investors.html">Investors</a>
                </div>
                <div class = "footer-column">
                    <h4>Social Media</h4>
                    <a href = "https://www.facebook.com/" target = "_blank"><i class="fab fa-facebook">  Facebook</i></a>
                    <a href = "https://www.instagram.com/" target = "_blank"><i class = "fab fa-instagram">  Instagram</i></a>
                    <a href = "https://www.twitter.com/" target = "_blank"><i class = "fab fa-twitter">  Twitter</i></a>
                    <a href = "https://www.pinterest.com/" target = "_blank"><i class = "fab fa-pinterest">  Pinterest</i></a>
                </div>
                <div class = "footer-column">
                    <div class = "vertical-line"></div>
                    <div class = column3-content>
                        <h4>Stay in Touch</h4>
                        <p>Stay up-to-date on Honest products, promotions and blog articles.</p>
                        <div class = "input-email" id="footer-email-input">
                            <input aria-label = "Email Address" id="news_letter_Email" placeholder=" Enter Email Address" type="text">
                        </div>
                        <a href = "" class = "signup-btn" id="signup" type="submit" value="Sign Up">SIGN UP</a>
                    </div>
                </div>
            </div>

            <div class = "row2-footer">
                <h3>Download Our App</h3>
                <p>Download App for Android and iOS</p>
                <div class = "app-logo">
                    <img src = "images/play-store.png">
                    <img src = "images/app-store.png">
                </div>    
            </div>

            <div class = "row3-footer">
                <p><i class="far fa-copyright"></i>2021. The Honest Company, Inc. All Rights Reserved.</p>
            </div>
        </section>


        <!---------JavaScript for Toggle Menu--------->
        <script>
            var navLinks = document.getElementById("navLinks");

            function showMenu(){
                navLinks.style.right = "0";
            }
            function hideMenu(){
                navLinks.style.right = "-200px";
            }
        </script>
    </body>

</html>
