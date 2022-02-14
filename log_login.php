<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: log_exam.php");
                    die;
                }
            }
        }

        echo '<script type="text/javascript">';
        echo ' alert("Wrong Username or Password")';  //showing an alert box.
        echo '</script>';
    } else {
        echo '<script type="text/javascript">';
        echo ' alert("Wrong Username or Password")';  //showing an alert box.
        echo '</script>';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--The site is written using universal characters-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Gets the default width from the dimension of the device currently being run on-->

    <title>Log In</title>
    <link rel="stylesheet" href="style_log.css">

</head>


<body>
    <section>
    <header style="background-color:#228B22";>
        <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo" style="width: 75px;"> </a>
            <div class="navigation">
                <a href="home_home.php">Home</a>
                <a href="home_about.php">About</a>
                <a href="home_contact.php">Contact</a>

            </div>
        </header>


        <div id="container">
            <div id="mini-container" style="background-color: white;">
                <form method="post">
                    <div style="font-size: 45px; margin: 15px; color: black; font-weight:bold;">LOG IN</div>

                    <p>Username</p>
                    <input id="text" type="text" name="user_name" style="margin-left:-10%"><br><br><br>
                    <p>Password</p>
                    <input id="text" type="password" name="password" style="margin-left:-10%"><br><br><br><br>

                    <input id="button" type="submit" value="Login"> <br> <br>
                    <a href="log_signup.php" id="shortcut">Click to Signup</a>
                </form>
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
