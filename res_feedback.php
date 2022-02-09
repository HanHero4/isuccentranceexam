<?php
session_start();
include("connection.php");
include("functions.php");

$sender = $_POST['sender'] ?? null;
$comment = $_POST['comment'] ?? null;

if (!empty($comment)) {
    $query = "INSERT INTO feedback(id, sender, comment) VALUES (NULL, '$sender', '$comment')";
    mysqli_query($con, $query);
    echo '<script type="text/javascript">';
    echo ' alert("Thank you for sending your feedback!")';  //showing an alert box.
    echo '</script>';
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Course Recommendation</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.00, maximum-scale=2.00, minimum-scale=1.00">
    <link rel="stylesheet" href="style_res.css">
</head>

<body>
    <section>
        <header>
            <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo"></a>
            <div class="navigation">
                <a href="home_home.php">Home</a>
                <a href="home_about.php">About</a>
                <a href="home_contact.php">Contact</a>
                <a href="log_logout.php">LOGOUT</a>
            </div>

        </header>
        <div>
            <div id="container">
                <div id="mini-container">
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
                <h1 style="padding-top: 10px; text-align:center;">SEND FEEDBACK</h1>


                <div class="inform">
                    <?php
                    echo "What can you say about the system? We are so thrilled to hear your thoughts";
                    ?>
                </div>

                <div class="test_num">
                    <form action="res_feedback.php" method="post">
                        <div class="test_choices" style="height: 300px;">
                            FROM: <br>
                            <input id="text" type="text" name="sender" style="margin-left: 0;">

                            <br>

                            MESSAGE: <br>
                            <input id="text" type="text" name="comment" style="width: 80%; height: 30%; margin-left:0">
                            <input id="button" type="submit" value="SEND MESSAGE" style="margin-top: 10%; margin-left: 80%; background: red;">
                        </div>
                    </form>
                </div>

                <div class="inform">
                    <a href="res_results.php">
                        <h4 id="button" style="margin-left: 38%; padding: 5px; margin-top: -2%; width: 25%;">GO BACK TO COURSE RECOMMENDATION</h4>
                    </a>
                    <a href="home_home.php">
                        <h4 id="button" style="margin-right: 29%; margin-top: -2%;">GO BACK TO HOME</h4>
                    </a>
                </div>

            </div>

            <div id="container" style="height: 150px;">
                <div id="mini-container">
                    <br>
                    <div class="exam-section" style="height: 50%; background-color: #228B22;">
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
                                <a href="home_contact.php">
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
