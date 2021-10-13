<!---------------- --------------->
<!DOCTYPE html>
<html lang = "en">
    <head> 
        <meta charset = "UTF-8">   
        <meta name = "viewport" content = "width=device-width", initial-scale = 1.0">
        <title>Sign In | Honest Beauty</title>
        <link rel = "stylesheet" href="style_login.css">
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
                        <a href = "login.html">SIGN IN</a>
                        <img src = "images/bag.svg" width = "30px", height = "30px">
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


        <!---------Account Page--------->
        <section class = "account-page">
            <div class = "row_account-page">
                <div class = "account-page-column">
                    <img src = "images/login-model.png" width = "100%">
                </div>
                <div class = "account-page-column">

                    <div class = "form-container">
                        <div class = "form-btn">
                            <button type = "button" class = "toggle-btn" onclick = "login()">Login</span>
                            <button type = "button" class = "toggle-btn" onclick = "register()">Register</span>
                            <hr id = "Indicator">
                        </div>
                    
                        <form class = "input-group" id = "LogInForm" action = "signin.inc.php" method = "post">
                        <input type = "text" name = "username" class = "input-field" placeholder = "Username" required>
                            <input type = "password" name = "password" class = "input-field" placeholder = "Password" required>
                            <input type = "checkbox" class = "check-box"><span>Remember Me</span>
                            <button type = "submit"  name = "sign-in" class = "login-btn">SIGN IN</button>
                            <a href = "">Forget Password</a>
                        </form>
    
                        <form class = "input-group" id ="RegistrationForm" action = "signup.inc.php" method = "post">
                            <input type = "text" name = "name" class = "input-field" placeholder = "Full Name" required>
                            <input type = "email" name = "email" class = "input-field" placeholder = "Email" required>
                            <input type = "text" name = "username" class = "input-field" placeholder = "Username" required>
                            <input type = "password" name = "password" class = "input-field" placeholder = "Password" required>
                            <input type = "password" name = "pwdRepeat" class = "input-field" placeholder = "Confirm Password" required>
                            <input type = "checkbox" class = "check-box"><span>I agree to the terms and conditions.</span>
                            <button type = "submit" name = "sign-up" class = "login-btn">CREATE ACCOUNT</button>
                        </form> 

                        
                        <?php

                            if (isset($_GET["error"])){
                                if($_GET["error"] == "emptyinput"){
                                    echo "<p>Fill in the fields!</p>";
                                }
                                elseif($_GET["error"] == "invalidusername"){
                                    echo "<p>Choose a proper username</p>";
                                }
                                elseif($_GET["error"] == "invalidemail"){
                                    echo "<p>Choose a proper email</p>";
                                }
                                elseif($_GET["error"] == "passworddontmatch"){
                                    echo "<p>Password Don't Match</p>";
                                }
                                elseif($_GET["error"] == "usernametaken"){
                                    echo "<p>Username already taken!</p>";
                                }
                                elseif($_GET["error"] == "stmtfailed"){
                                    echo "<p>Something went wrong, try again!</p>";
                                }
                                elseif($_GET["error"] == "none"){
                                    echo "<p>You have signed up!</p>";
                                }
                            }
                        ?>
                    </div>

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
                        <a href = "" class = "signup-btn" id = "signup" type="submit" value="Sign Up">SIGN UP</a>
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

        <!---------JavaScript for Toggle Form--------->
        <script>
            var LogInForm = document.getElementById("LogInForm");
            var RegistrationForm = document.getElementById("RegistrationForm");
            var Indicator = document.getElementById("Indicator");

            function login()
            {
                LogInForm.style.transform = "translateX(0px)";
                RegistrationForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(10px)";
            }
            function register()
            {
                RegistrationForm.style.transform = "translateX(-380px)";
                LogInForm.style.transform = "translateX(-380px)";
                Indicator.style.transform = "translateX(135px)";
            }
        </script>

    </body>

</html>