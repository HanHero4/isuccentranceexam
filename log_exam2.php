<?php
session_start();

include("connection.php");
include("functions.php");

$sql = "SELECT * FROM exam;";
$exam_instance = $_POST['submit'] ?? null;

if ($exam_instance) {
    $id = random_int(0, 100000);
    //   $date = date(1);
    //   $time = microtime();
    $query = "INSERT INTO exam (id) VALUES ('$id')";
    mysqli_query($con, $query);

    header("Location: log_exam2.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Exam Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.00, maximum-scale=2.00, minimum-scale=1.00">

    <link rel="stylesheet" href="style_log.css">
</head>

<body style="background-color: white">

<header>
        <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo" style="width: 75px;"> </a>
            <div class="navigation">
                <a href="home_home.php">Home</a>
                <a href="home_about.php">About</a>
                <a href="home_contact.php">Contact</a>
            </div>
        </header>

    <section>
        <div>

            <div id="container2">
                <div id="mini-container2">
                    <h2>EXAM SECTIONS</h2>
                    <br>
                    <div class="exam-section">
                        <p>SCIENCE</p>
                    </div>
                    <div class="exam-section">
                        <p>MATH</p>
                    </div>
                    <div class="exam-section">
                        <p>ENGLISH</p>
                    </div>
                    <div class="exam-section">
                        <p>FILIPINO</p>
                    </div>
                </div>
            </div>

            <br><br>


            <div class="exam-test">
                <h1 style="padding-top: 10px; text-align:center;">EXAM TEST</h1>

                <div class="exam-intro">
                    <p>
                        Each exam section has a timer limit of 25 minutes. This allows the examinee to better focus on questions and also avoid cheating.
                        <br><br>
                        After the timer has been over, all the response of the user, if not submitted, will not be saved. So, be mindful of it. And click START EXAM button if you are ready.
                        <br><br>
                    </p>

                    <br><br><br><br><br><br><br><br><br><br><br>

                    <a href="test_science.php">
                        <div id="button" style="margin-left: 74%; width: auto; text-align: center">
                            <h2>START EXAM</h2>
                        </div>
                    </a>
                </div>
            </div>

                <div id="container2" style="height: 150px; margin-top: 1%;">
                    <div id="mini-container2";>
                        <br>
                        <div class="exam-section" style="height: 50%">
                            <p>COURSE RECOMMENDATION</p>
                        </div>
                    </div>
                </div>
            </div>
        

        <br><br>
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
