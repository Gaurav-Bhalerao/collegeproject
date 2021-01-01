<!DOCTYPE html>
<html lang="en">
<head>
    <title>About US</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawasome -->
    <script src="https://kit.fontawesome.com/0ff0b45b0e.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <!-- Navigation Bar CSS -->
    <link rel="stylesheet" href="CSS/NavigationBar.css">
    <!-- Landing Page CSS -->
    <link rel="stylesheet" href="CSS/LandingPage.css">
    <!-- About CSS -->
    <link rel="stylesheet" href="CSS/Contact.css">
    <!-- Footer CSS -->
    <link rel="stylesheet" href="CSS/Footer.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="CSS/owl.carousel.css">
    <link rel="stylesheet" href="CSS/owl.theme.default.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="CSS/aos.css">
    <!-- Izmir CSS -->
    <link rel="stylesheet" href="CSS/Izmirhovercss.css">
    <style>
        .custom-shape-divider-bottom-1601937984 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-bottom-1601937984 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 100px;
        }

        .custom-shape-divider-bottom-1601937984 .shape-fill {
            fill: #F8F9FA;
        }

        .LandingPageContainer {
            position: relative;
            background-image: url(IMAGES/BG3.jpg);
            /*background-color: rebeccapurple;*/
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 90vh;
            width: 100%;
            color: white;
        }

        .LandingPageContainer .overlay::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #0000008f;
        }

        .LandingPage #landingPageHeading-1 {
            font-size: 11vw;
            font-family: 'Bungee Inline', cursive;
            text-align: center;
            color: #edc139;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar Starts -->
    <header id="headerContainer">
        <div class="NavigationBarContainer container">
            <div id="logoName">EventoMania</div>
            <nav class="NavigationMenu">
                <a id="navItems" href="index.html">Home</a>
                <a id="navItems" href="Portfolio.html">Portfolio</a>
                <a id="navItems" href="Contact.php" class="active">Contact</a>
                <a id="navItems" href="About.html">About</a>
            </nav>
        </div>
    </header>
    <!-- Navigation Bar Ends -->

    <!-- Contact Landing Page Section Start -->
    <section class="LandingPageContainer">
        <div class="overlay"></div>
        <div class="LandingPage">
            <div id="landingPageHeading-1" data-aos="zoom-in-down" data-aos-duration="1000">Reach US</div>
        </div>
        <!-- Divider -->
        <div class="custom-shape-divider-bottom-1601937984">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
        <!-- Divider Ends -->
    </section>
    <!-- Contact Landing Page Section Ends -->
    
    <!-- Contact Main Section Start -->
    <div class="ContactSectionContainer">
        <div class="ContactSection">
            <div class="container contact">
                <div class="row">
                    <div class="col-md-3 ContactCardContainer">
                        <div class="contact-info">
                            <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                            <h2>Contact Us</h2>
                            <h4>We would love to hear from you !</h4>
                        </div>
                    </div>
                    <div class="col-md-9 ContactFormContainer">
                        <div class="contact-form">
                            <form method="POST" action="PHP/addContact.php">
                                <div class="form-group">
                                  <label class="control-label col-sm-2" for="fname">First Name:</label>
                                  <div class="col-sm-10">          
                                    <input type="text" class="form-control" id="CFname" placeholder="Enter First Name" name="CFname" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-sm-2" for="lname">Last Name:</label>
                                  <div class="col-sm-10">          
                                    <input type="text" class="form-control" id="CLname" placeholder="Enter Last Name" name="CLname" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-sm-2" for="email">Email:</label>
                                  <div class="col-sm-10">
                                    <input type="email" class="form-control" id="CEmail" placeholder="Enter email" name="CEmail" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Phone:</label>
                                    <div class="col-sm-10">
                                      <input type="tel" class="form-control" id="CPhone" placeholder="Enter Phone no" name="CPhone" required>
                                    </div>
                                  </div>
                                <div class="form-group">
                                  <label class="control-label col-sm-2" for="comment">Contact:</label>
                                  <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="CMessege" name="CMessege"></textarea>
                                  </div>
                                </div>
                                <div class="form-group">        
                                  <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Main Section Ends -->
    
    <!-- Footer Section Starts -->
    <footer>
        <div class="FooterContainer container">
            <div class="FooterSection-1">
                <div id="footerSection-1-Heading-1"> EventoMania </div>
                <div id="footerSection-1-Heading-2"> &copy; Gaurav Bhalerao </div>
            </div>
            <div class="FooterSection-3">
                <div id="footerSection-3-Heading-1"> Our Social Links </div>
                <div class="FooterSocialIcons">
                    <a href="#"> <i class="fab fa-instagram"></i> </a>&nbsp;
                    &nbsp;<a href="#"> <i class="fa fa-facebook-square"></i> </a>&nbsp;
                    &nbsp;<a href="#"> <i class="fab fa-twitter"></i> </a>&nbsp;
                    &nbsp;<a href="#"> <i class="fa fa-linkedin"></i> </a>&nbsp;
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ends -->

    <!-- Javascript -->
    
    <!-- JQuery -->
    <script src="JS/jquery-3.5.1.js"></script>
    <!-- Bootstrap JS -->
    <script src="JS/bootstrap.js"></script>
    <!-- Owl carousel -->
    <script src="JS/owl.carousel.js"></script>
    <!-- Owl Carrousal Ends -->
    
    <!-- Navigation Bar Script -->
    <script src="JS/NavigationBar.js"></script>
    <!-- AOS JS -->
    <script src="JS/aos.js"></script>
    <!-- AOS Initilization -->
    <script>
        AOS.init({
      once: true
	});
    </script>
    <!-- AOS END -->
</body>
</html>