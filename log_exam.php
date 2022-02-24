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

<body>
    
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
                        The admins of the system will verify the informations you have provided in the Sign Up Page.
                        It was administered to make sure honesty and academic integrity.
                        <br><br>
                        The exam tackles (4) subjects: Science, Math, English, and Filipino. Thus, it was divided into four (4) sections.
                        Each exam section consists of twenty-five (25) questions tackling one same subject.
                        <br><br>
                        The system has associated the questions into 25 different college courses in order to give you the most accurate
                        recommendation possible. You can find the list of college courses below:
                        <br>
                    </p>

                    <div class="list-course">
                        <p>
                            1. Bachelor of Science in Business Administration (BSBA) <br>
                            2. Bachelor of Science in Accounting (BSA) <br>
                            3. Bachelor of Science in Nursing (BSN)<br>
                            4. Bachelor of Science in Psychology (BSP)<br>
                            5. Bachelor of Science in Development Communications (BS DevCom)<br>
                            6. Bachelor of Science in Marketing (BSM)<br>
                            7. Bachelor of Education Major in Science (BSEd)<br>
                            8. Bachelor of Elementary Education (BEEd)<br>
                            9. Bachelor of Science in English Education (BE Eng)<br>
                            10. Bachelor of Science in Computer Science (BSCS)<br>
                            11. Bachelor of Science in Finance (BSF)<br>
                            12. Bachelor of Science in Criminal Justice (BS Crim)<br>
                            13. Bachelor of Science in Biology (BS Bio)<br>
                            14. Bachelor of Science in Political Science (BSPS)<br>
                            15. Bachelor of Science in Economics (BSE)<br>
                            16. Bachelor of Science in Electrical Engineering (BSEE)<br>
                            17. Bachelor of Science in History (BSH)<br>
                            18. Bachelor of Science in Liberal Arts (BSLA)<br>
                            19. Bachelor of Science in Sociology (BSS)<br>
                            20. Bachelor of Science in Fine Arts (BSFA)<br>
                            21. Bachelor of Science in Commercial Art & Graphic Design (BSCG)<br>
                            22. Bachelor of Science in General Engineering (BSGE)<br>
                            23. Bachelor of Science in Journalism (BSJ)<br>
                            24. Bachelor of Science in Computer and Information Systems (BSIT)<br>
                            25. Bachelor of Science in Social Work (BSCW)<br>
                        </p>
                    </div>

                    <br><br>
                    
                    <form action="log_exam.php" method="POST">
                        <div id="button" style="margin-left: 74%; width: auto; text-align: center">
                            <input type="submit" name="submit" value="GENERATE EXAM ID">
                        </div>
                    </form>

                </div></div>

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
