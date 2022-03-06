<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $gwa = $_POST['gwa'];
    $campus = $_POST['campus'];

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $schoolmail = $_POST['schoolmail'];

    if (
        !empty($user_name) && !empty($password) && !empty($first_name) && !empty($last_name) && !empty($middle_name)  &&
        !empty($age) && is_numeric($age)  && !empty($address) && !empty($campus) && !empty($gwa) && !is_numeric($user_name)
    ) {

        //save to database
        $user_id = random_int(0, 100000);
        $query = "insert into users (user_id,user_name,password, last_name, first_name, middle_name, age, address, gwa, campus, schoolmail, gender) values 
                    ('$user_id','$user_name','$password', '$last_name','$first_name','$middle_name','$age','$address','$gwa','$campus', '$schoolmail', '$gender')";

        mysqli_query($con, $query);

        header("Location: log_act_created.html");
        die;
    } else {
        echo '<script type="text/javascript">';
        echo ' alert("Enter all required information and make sure they are valid")';  //not showing an alert box.
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

    <title>Sign Up</title>
    <link rel="stylesheet" href="style_log.css">
</head>


<body style="background-image: url('signup2.jpg'); background-size: cover;">
<header>
        <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo" style="width: 75px;"> </a>
            <div class="navigation">
                <a href="home_home.php">Home</a>
                <a href="home_about.php">About</a>
                <a href="home_contact.php">Contact</a>

            </div>
        </header>

        <section>
        <div id="container" >
            <div id="mini-container" style="background-image: url(signup2.jpg); background-size: cover; background-repeat:no-repeat; height: 950px;">
                <form method="post">
                    <div style="font-size: 45px; margin: 15px; color: black; font-weight:bold;">SIGN UP</div>

                    <div class="mini-mini-container1">
                        <h3>Personal Information</h3>
                        <p>Full name (last, first, middle)</p>
                        <div style="margin-left: -100%;">
                            <input id="text" type="text" name="last_name" style="width:30%;">
                        </div>
                        <div style="margin-left: -35%;">
                            <input id="text" type="text" name="first_name" style="width:25%;">
                        </div>
                        <div style="margin-left: 20%;">
                            <input id="text" type="text" name="middle_name" style="width:35%;">
                        </div>

                        <br><br><br>

                        <p>Age</p>
                        <div style="margin-left: -100%;">
                            <input id="text" type="int" name="age">
                        </div>

                        <br><br><br>
                        
                        <p>Gender</p>
                        <div style="margin-left: -70%;">
                            <input type="radio" value="Male" name="gender">Male
                            <input type="radio" value="Female" name="gender">Female
                        </div>

                        <br><br><br>

                        <p>Address (barangay, municipality, province/state)</p>
                        <div style="margin-left: -100%;">
                            <input id="text" type="text" name="address" style="width:85%;">
                        </div>

                        <br><br><br><br>

                        <br>
                        <h3>Educational Background</h3>
                        <p>Senior High School Graduated</p>
                        <div style="margin-left: -100%;">
                            <input id="text" type="text" name="campus" style="width:90%;">
                        </div>

                        <br><br><br>

                        <p>GWA</p>
                        <div style="margin-left: -100%;">
                            <input id="text" type="int" name="gwa">
                        </div>

                        <br><br><br>

                        

                    </div>
                    <div class="mini-mini-container2">
                        <h3>Username and Password</h3>
                        <p style="text-align: left;">Username</p>
                        <input id="text" type="text" name="user_name" style="margin-left: -50%">

                        <br><br><br>

                        <p style="text-align: left;">Password</p>
                        <input id="text" type="password" name="password" style="margin-left: -50%">
                        <br><br><br><br><br><br><br><br><br><br><br><br>

                        <p style="text-align: left;">Email Address</p>
                        <div style="margin-left: -100%;">
                            <input id="text" type="email" name="schoolmail" style="width:50%;">
                        </div>
                    </div>

                    <br><br><br><br><br><br>
                    
                    <input id="button" type="submit" value="Signup" style="margin-top: 50%; margin-left: 80%"> <br> <br>
                    <a href="log_login.php" id="shortcut" style="margin-left: 80%">Click to Log In</a>
                    <br><br><br><br>
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
