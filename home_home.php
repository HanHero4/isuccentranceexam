<?php


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--The site is written using universal characters-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Gets the default width from the dimension of the device currently being run on-->

    <title>Exam System</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
        <header>
        <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo"> </a>
            <div class="navigation">
                <a href="home_home.php">Home</a>
                <a href="home_about.php">About</a>
                <a href="home_contact.php">Contact</a>

            </div>
        </header>

        <section>
        <div class="content">
            <div class="info">
                <h1>WEB-BASED ENTRANCE EXAM</h1><br>
                <h2>WITH COURSE RECOMMENDATION</h2> 
                <p>
                    DEVELOPED BY HAN HERO PAGLINAWAN, ANGILYN MIGUEL, AND JOVELYN DELA CRUZ <br>
                    With the advent of technology, newer ways of doing things are being invented.
                    One of them is an exam that doesn't just test your knowledge, but also recommends you
                    the appropriate college course that you should take to maximize that. <br>

                </p>
                <a href="log_signup.php" class="info-btn">Sign Up</a>
                <a href="log_login.php" class="info-btn">Log In</a>
            </div>
        </div>

        <br><br><br><br><br><br><br>

        <div class="features">
            <h1>FEATURES</h1>
            <div class="featurrette">
                <h4>FREE</h4>
                <img src="images/2free.jpg">
                <p>Test yourself, free of charge</p>
            </div>
            <div class="featurrette">
                <h4>ACCESSIBILITY</h4>
                <img src="images/2access.jpg">
                <p>You can take this test anytime, anywho, anywhere</p>
            </div>
            <div class="featurrette">
                <h4>SIMPLICITY</h4>
                <img src="images/2simple.jpg">
                <p>Designed to be as simple as you</p>
            </div>
            <div class="featurrette">
                <h4>PRIVACY</h4>
                <img src="images/2secure.jpg">
                <p>Your informations are yours</p>
            </div>
        </div>

        <!--THE IMAGE SLIDER PART-->
        <div class="rt-container">
            <div class="col-rt-12">
                <h2>GALLERY</h2>
                <input id="sliderSwitch" class="slider__switch" type="checkbox" name="sliderSwitch" hidden />
                <div class="slider">
                    <ul class="slider__list">
                        <li class="slider__slide"><img src="http://localhost/exam/home/gallery1.jpg" /></li>
                        <li class="slider__slide"><img src="http://localhost/exam/home/gallery2.jpg" /></li>
                        <li class="slider__slide"><img src="http://localhost/exam/home/gallery3.jpg" /></li>
                        <li class="slider__slide"><img src="http://localhost/exam/home/gallery4.jpg" /></li>
                    </ul>
                </div>
                <div class="slider__control">
                    <label for="sliderSwitch"></label>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <!-- FOOTER -->
        <footer>
            <div class="footsie1">
                <h3>Learn More</h2>
                    <a href="https://tinyurl.com/2p82s29s">
                        <p style="color:black;">What is an Online Exam</p>
                    </a>
                    <a href="https://www.speedexam.net/">
                        <p style="color:black;">Other online exam systems</p>
                    </a>
                    <a href="https://tinyurl.com/4htr72zd/">
                        <p style="color:black;">Research and articles</p>
                    </a>
            </div>
            <div class="logo">
                <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo"></a>
            </div>
            <div class="footsie2">
                <h3>Contact</h2>
                    <a href="https://web.facebook.com/isucauayancampus">
                        <p style="color:black;">Facebook</p>
                    </a>
                    <a href="https://mail.google.com/mail/">
                        <p style="color:black;">Email</p><a>
                            <a href="http://localhost/exam/home/contact.php">
                                <p style="color:black;">Phone</p>
                            </a>
                            <a href="https://instagram.com/">
                                <p style="color:black;">Instagram</p>
                            </a>
            </div>
            <div class="footsie3">
                <h3>About Us</h2>
                    <a href="home_about.php">
                        <p style="color:black;">Read</p>
                    </a>
            </div>
        </footer>
    </section>

</body>

</html>